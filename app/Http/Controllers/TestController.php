<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Exhibit;
use App\Models\Hint;
use App\Models\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function test()
    {

        //check is there's a dependency file overriding the default json data
        $filepath = database_path() . '/json/auditory.json';

        //get the data from the file and insert them
        $json = \File::get($filepath);

        $data = json_decode($json);

        $category = new Category(['name' => 'Ακοή']);


        foreach ($data->category->exhibits as $exhibit) {

            $exhibit = new Exhibit([
                'name' => $exhibit->name,
                'description' => $exhibit->description,
                'code' => $exhibit->code,
                'site_url' => $exhibit->site_url,
                'category_id' => 1
            ]);
            $exhibit->save();

            $question = new Question([
                'name' => $exhibit->name,
                'description' => $exhibit->description,
                'exhibit_id' => $exhibit->id
            ]);
            $question->save();
            $question->hint()->save(new Hint(['description' => $exhibit->description]));

            return $exhibit;
            $answers = [];
            foreach ($exhibit->answers as $answer) {
                array_push($answers, new Answer([
                    'description' => $answer->description,
                    'isCorrect' => $answer->isCorrect
                ]));
            }
            $question->answers()->saveMany($answers);
        }

        return $category->id;

        return $category->category->name;
    }

}
