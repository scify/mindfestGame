<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Question;
use App\Services\AccountService;
use App\Services\QuestionService;

class QuestionController extends Controller {

    private $questionService;
    private $accountService;

    public function __construct() {
        $this->questionService = new QuestionService();
        $this->accountService = new AccountService();
        $this->middleware('auth');
    }

    /**
     * For a certain question, check if the answer is the correct one
     * @param $id
     * @return mixed|null
     */
    public function checkAnswer($id) {
        $question = Question::with('answers', 'hint')->find($id);

        foreach ($question->answers as $answer) {
            if ($answer->isCorrect && $answer->id == \Request::get('answer'))
                return [
                    'hasError' => false,
                    'questionId' => $id
                ];
            else if ($answer->isCorrect && $answer->id != \Request::get('answer'))
                return [
                    'hasError' => true,
                    'hint' => $question->hint
                ];
        }
    }


    /**
     * Reward the user for their correct answer
     *
     * @param $questionId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rewardUser($questionId) {
        $user = \Auth::user();
        $alreadyBrainMaster = $user->is_brain_master;
        $alreadyAnswered = $this->questionService->checkIfAlreadyAnswered($questionId);

        $question = Question::with('exhibit.category.badge')->find($questionId);
        $hasBadgeAlready = $this->questionService->hasBadgeAlready($question->exhibit->category->badge->id);

        $question = $this->questionService->rewardUser($questionId);
        $isBrainMaster = $this->questionService->isBrainMaster();

        $user = \Auth::user();
        $shareLink = $this->accountService->getSocialPost($user, $isBrainMaster, $question->exhibit->category->badge);

        $badges=[];
        if ($question->exhibit->category->badge->image_name != null && $question->exhibit->category->badge->image_name != "")
            $badges = $this->accountService->getBadges($user);

        if ($isBrainMaster)
            return view('awards.brainMaster', compact('question', 'shareLink', 'user', 'badges', 'alreadyAnswered', 'alreadyBrainMaster'));
        else
            return view('awards.badge', compact('question', 'shareLink', 'user', 'badges', 'alreadyAnswered', 'hasBadgeAlready'));
    }


}
