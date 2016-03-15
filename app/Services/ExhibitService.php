<?php namespace App\Services;

use App\Models\Exhibit;

/**
 * Class ExhibitService
 * @package App\Services
 *
 * Service associated with the exhibit object
 */
class ExhibitService {

    /**
     * Get one exhibit
     *
     * @param $id
     * @return \App\Models\Exhibit
     */
    public function getById($id){

        $exhibit = Exhibit::find($id);

        return $exhibit;
    }

    /**
     * Get one exhibit and load all its relationships
     *
     * @param $id
     * @return \App\Models\Exhibit
     */
    public function getByIdWithQuestion($id) {

        $exhibit = Exhibit::with('category.question.answers', 'category.question.hint')->find($id);

        //unset the correct answer boolean
        foreach ($exhibit->category->question->answers as $answer) {
            unset($answer->isCorrect);
        }

        return $exhibit;
    }
}
