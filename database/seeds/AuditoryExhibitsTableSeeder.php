<?php

use App\Models\Badge;
use App\Models\Category;
use App\Models\Exhibit;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Hint;
use Illuminate\Database\Seeder;

class AuditoryExhibitsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * Use php artisan db:seed to run the seed files.
     *
     * @return void
     */
    public function run() {

        //generate categories
        $auditory = new Category(['name' => 'Ακοή']);
        $auditory->save();
        $auditory->badge()->save(new Badge(['image_name' => 'badge1.png']));

        $exhibit = new Exhibit([
            'name' => 'Μουσική συμφωνία',
            'description' => 'Stare at ceiling light chase laser, scratch at the door then walk away but attack dog, run away and pretend to be victim yet chase ball of string, but destroy couch as revenge tuxedo cats always looking dapper. Immediately regret falling into bathtub when in doubt, wash.',
            'image_name' => 'exhibit1.jpg',
            'code' => 'musical-symphony',
            'site_url' => 'http://mindfest.org/%CE%B5%CE%BA%CE%B8%CE%AD%CE%BC%CE%B1%CF%84%CE%B1/',
            'category_id' => $auditory->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 1',
            'description' => 'Soft kitty warm kitty little ball of ...',
            'exhibit_id' => $exhibit->id
        ]);
        $question->save();

        $question->answers()->saveMany([
            new Answer([
                'description' => 'furr.',
                'isCorrect' => true
            ]),
            new Answer([
                'description' => 'purr.'
            ]),
            new Answer([
                'description' => 'murr.'
            ]),
            new Answer([
                'description' => 'cookies.'
            ])
        ]);
        $question->hint()->save(new Hint(['description' => 'It\'s fluffy and you like it.']));


        $exhibit = new Exhibit([
            'name' => 'Πλάνη τόνου του Sheperd',
            'description' => 'Stare at ceiling light chase laser, scratch at the door then walk away but attack dog, run away and pretend to be victim yet chase ball of string, but destroy couch as revenge tuxedo cats always looking dapper. Immediately regret falling into bathtub when in doubt, wash.',
            'image_name' => 'exhibit1.jpg',
            'code' => 'sheperd-tone-illusion',
            'site_url' => 'http://mindfest.org/%CE%B5%CE%BA%CE%B8%CE%AD%CE%BC%CE%B1%CF%84%CE%B1/',
            'category_id' => $auditory->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 1',
            'description' => 'Soft kitty warm kitty little ball of ...',
            'exhibit_id' => $auditory->id
        ]);
        $question->save();

        $question->answers()->saveMany([
            new Answer([
                'description' => 'furr.',
                'isCorrect' => true
            ]),
            new Answer([
                'description' => 'purr.'
            ]),
            new Answer([
                'description' => 'murr.'
            ]),
            new Answer([
                'description' => 'cookies.'
            ])
        ]);
        $question->hint()->save(new Hint(['description' => 'It\'s fluffy and you like it.']));
    }


}
