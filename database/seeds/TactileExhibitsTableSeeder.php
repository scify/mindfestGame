<?php

use App\Models\Answer;
use App\Models\Badge;
use App\Models\Category;
use App\Models\Exhibit;
use App\Models\Hint;
use App\Models\Question;
use Illuminate\Database\Seeder;

class TactileExhibitsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * Use php artisan db:seed to run the seed files.
     *
     * @return void
     */
    public function run() {

        $tactile = new Category(['name' => 'Aφή']);
        $tactile->save();
        $tactile->badge()->save(new Badge(['image_name' => 'badge1.png']));

        $exhibit = new Exhibit([
            'name' => 'Απτική συγχώνευση',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'tactile-funneling',
            'category_id' => $tactile->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Δερματικός “λαγός”',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'cutaneous-rabbit',
            'category_id' => $tactile->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Πλάνη Αριστοτέλη',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'aristotle-illusion',
            'category_id' => $tactile->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Πλάνη όγκου – βάρους',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'size-weight-illusion',
            'category_id' => $tactile->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Πλάνη Πινόκιο',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'pinocchio-illusion',
            'category_id' => $tactile->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Πλάνη πλαστικού χεριού',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'rubber-hand-illusion',
            'category_id' => $tactile->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Πλάνη χρώματος – βάρους',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'color-weight-illusion',
            'category_id' => $tactile->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 4',
            'description' => 'Kitty brought a surprise gift for you. It\'s a dead mouse. You ...',
            'exhibit_id' => $exhibit->id
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
