<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Question;

class QuestionController extends Controller {

    /**
     * For a certain question, check if the answer is the correct one
     * @param $id
     * @return mixed|null
     */
    public function checkAnswer($id) {
        $question = Question::with('answers', 'hint')->find($id);

        foreach ($question->answers as $answer) {
            if ($answer->isCorrect && $answer->id == \Request::get('answer'))
                return null;
            else if ($answer->isCorrect && $answer->id != \Request::get('answer'))
                return $question->hint;
        }
    }


    public function rewardUser($questionId) {

        $question = Question::with('category.badge')->find($questionId);

        /*
        $user = \Auth::user();
        $user->questions()->associate($questionId);
        $user->badges()->associate($question->category->badge->id);
       */
        return view('awards.badge', compact('question'));
    }


}
