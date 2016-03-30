<?php namespace App\Services;

use App\Models\Category;
use App\Models\Question;

class QuestionService {


    /**
     * Check if the user has already answered the question
     *
     * @param $questionId
     * @return bool
     */
    public function checkIfAlreadyAnswered($questionId) {
        $user = \Auth::user();
        $user->load('questions');

        $flag = false;
        foreach ($user->questions as $question) {
            if ($question->id == $questionId) {
                $flag = true;
                break;
            }
        }
        return $flag;
    }

    /**
     * Reward user, attach him/her to the appropriate question
     * and badge
     *
     * @param $questionId
     * @return mixed
     */
    public function rewardUser($questionId) {

        $question = Question::with('exhibit.category.badge')->find($questionId);
        $user = \Auth::user();
        $user->load('questions');
        $user->load('badges');

        //first check if the question is already assigned to the user
        $flag = false;
        foreach ($user->questions as $q) {
            if ($questionId == $q->id) {
                $flag = true;
                break;
            }
        }

        //if it's not, attach it
        if (!$flag) {
            $user->questions()->attach($questionId);

            //then check id the badge has been attached to user
            foreach ($user->badges as $b) {
                if ($b->id == $question->exhibit->category->badge->id) {
                    $flag = true;
                    break;
                }
            }
            //if not, attach it
            if (!$flag)
                $user->badges()->attach($question->exhibit->category->badge->id);
        }

        return $question;
    }

    /**
     * Check if user is brain master,
     * that means that they have answered as many questions
     * as the categories
     *
     * @return bool
     */
    public function isBrainMaster() {

        $categories = Category::all()->count();
        $user = \Auth::user();
        $user->load('badges');

        if ($categories == sizeof($user->badges))
            return true;
        else return false;
    }
}
