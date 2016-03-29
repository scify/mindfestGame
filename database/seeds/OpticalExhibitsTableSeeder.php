<?php

use App\Models\Badge;
use App\Models\Category;
use App\Models\Exhibit;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Hint;
use Illuminate\Database\Seeder;

class OpticalExhibitsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * Use php artisan db:seed to run the seed files.
     *
     * @return void
     */
    public function run() {
        
        $optical = new Category(['name' => 'Όραση']);
        $optical->save();
        $optical->badge()->save(new Badge(['image_name' => 'badge1.png']));
        
        $exhibit = new Exhibit([
            'name' => 'Κοίλο πρόσωπο',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'hollow-face',
            'category_id' => $optical->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 3',
            'description' => 'Kitty stares at you for more than 10 minutes. You should ...',
            'exhibit_id' => $exhibit->id
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




        $exhibit = new Exhibit([
            'name' => 'Μετείκασμα',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'optical-after-effect',
            'category_id' => $optical->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 3',
            'description' => 'Kitty stares at you for more than 10 minutes. You should ...',
            'exhibit_id' => $exhibit->id
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



        $exhibit = new Exhibit([
            'name' => 'Πλάνη προοπτικής',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'perspective-illusion',
            'category_id' => $optical->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 3',
            'description' => 'Kitty stares at you for more than 10 minutes. You should ...',
            'exhibit_id' => $exhibit->id
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




        $exhibit = new Exhibit([
            'name' => 'Πλάνη φωτεινότητας',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'brightness-illusion',
            'category_id' => $optical->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 3',
            'description' => 'Kitty stares at you for more than 10 minutes. You should ...',
            'exhibit_id' => $exhibit->id
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



        $exhibit = new Exhibit([
            'name' => 'Τυφλό σημείο',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'blind-spot',
            'category_id' => $optical->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 3',
            'description' => 'Kitty stares at you for more than 10 minutes. You should ...',
            'exhibit_id' => $exhibit->id
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



        $exhibit = new Exhibit([
            'name' => 'Χαμόγελο του Cheshire',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'cheshire-smile',
            'category_id' => $optical->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 3',
            'description' => 'Kitty stares at you for more than 10 minutes. You should ...',
            'exhibit_id' => $exhibit->id
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


    }


}
