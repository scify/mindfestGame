<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{

    /**
     * For a certain question, check if the answer is the correct one
     * @param $id
     * @return mixed|null
     */
    public function checkAnswer($id)
    {
        $question = Question::with('answers', 'hint')->find($id);

        foreach($question->answers as $answer){
            if($answer->isCorrect && $answer->id == \Request::get('answer'))
                return null;
            else if ($answer->isCorrect && $answer->id != \Request::get('answer'))
                return $question->hint;
        }
    }


}
