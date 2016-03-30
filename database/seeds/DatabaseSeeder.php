<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Badge;
use \App\Models\Exhibit;
use \App\Models\Question;
use \App\Models\Answer;
use \App\Models\Hint;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        $files = [
            'auditory',
            'higher',
            'optical',
            'tactile',
            'taste',
        ];

        foreach ($files as $file) {
            $this->addData($file);
        }

        Model::reguard();
    }


    private function addData($file) {

        //check is there's a dependency file overriding the default json data
        $filepath = database_path() . '/json/' . $file . '.json';

        //get the data from the file and insert them
        $json = \File::get($filepath);

        $data = json_decode($json);

        //create the category
        $category= new Category(['name' => $data->category->name]);
        $category->save();
        $category->badge()->save(new Badge(['image_name' => $data->category->image_name]));

        //create the exhibits and the questions
        foreach ($data->category->exhibits as $exhibit) {

            $ex = new Exhibit([
                'name' => $exhibit->name,
                'description' => $exhibit->description,
                'code' => $exhibit->code,
                'site_url' => $exhibit->site_url,
                'category_id' => $category->id
            ]);
            $ex->save();

            $question = new Question([
                'description' => $exhibit->question,
                'exhibit_id' => $ex->id
            ]);
            $question->save();
            $question->hint()->save(new Hint(['description' => $exhibit->hint]));

            $answers = [];
            foreach ($exhibit->answers as $answer) {
                array_push($answers, new Answer([
                    'description' => $answer->description,
                    'isCorrect' => $answer->isCorrect
                ]));
            }
            $question->answers()->saveMany($answers);
        }

    }
}
