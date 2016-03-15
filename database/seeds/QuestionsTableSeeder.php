<?php

use App\Models\Answer;
use App\Models\Category;
use App\Models\Hint;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * Use php artisan db:seed to run the seed files.
     *
     * @return void
     */
    public function run() {

        $optical = Category::where('name', 'Optical')->first(['id']);
        $tactile = Category::where('name', 'Tactile')->first(['id']);
        $auditory = Category::where('name', 'Auditory')->first(['id']);
        $taste = Category::where('name', 'Taste')->first(['id']);


        /* Question 1 */
        $question = new Question([
            'name' => 'Question 1',
            'description' => 'Soft kitty warm kitty little ball of ...',
            'category_id' => $optical->id
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


        /* Question 2 */
        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'category_id' => $auditory->id
        ]);
        $question->save();

        $question->answers()->saveMany([
            new Answer([
                'description' => 'ultimate hunger (ate just 5 minutes ago).'
            ]),
            new Answer([
                'description' => 'time for some cuddling.'
            ]),
            new Answer([
                'description' => 'working on mommy\'s laptop.',
                'isCorrect' => true
            ]),
            new Answer([
                'description' => 'death trap.'
            ])
        ]);
        $question->hint()->save(new Hint(['description' => 'You thought working from home would be fun...']));


        /* Question 3 */
        $question = new Question([
            'name' => 'Question 3',
            'description' => 'Kitty stares at you for more than 10 minutes. You should ...',
            'category_id' => $tactile->id
        ]);
        $question->save();

        $question->answers()->saveMany([
            new Answer([
                'description' => 'stare back. STARING CONTEST IS ON.'
            ]),
            new Answer([
                'description' => 'get out of the room asap.',
                'isCorrect' => true
            ]),
            new Answer([
                'description' => 'pet it.'
            ]),
            new Answer([
                'description' => 'ignore the kitty'
            ])
        ]);
        $question->hint()->save(new Hint(['description' => 'Run. Away. Now.']));


        /* Question 4 */
        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'category_id' => $taste->id
        ]);
        $question->save();

        $question->answers()->saveMany([
            new Answer([
                'description' => 'scream and throw away the nasty thing (the mouse, not the kitty).'
            ]),
            new Answer([
                'description' => 'ignore the kitty and the gift.'
            ]),
            new Answer([
                'description' => 'keep the gift.'
            ]),
            new Answer([
                'description' => 'congratulate the kitty on its excellent hunting skills.',
                'isCorrect' => true
            ])
        ]);
        $question->hint()->save(new Hint(['description' => 'Do not dare to underestimate kitty.']));

    }

}
