<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Question;
use App\Services\QuestionService;

class QuestionController extends Controller {

    private $questionService;

    public function __construct() {
        $this->questionService = new QuestionService();
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
        $question = $this->questionService->rewardUser($questionId);
        $isBrainMaster = $this->questionService->isBrainMaster();

        if ($isBrainMaster)
            return view('awards.brainMaster', compact('question'));
        else
            return view('awards.badge', compact('question'));
    }


}
