<?php

use App\Models\Answer;
use App\Models\Badge;
use App\Models\Category;
use App\Models\Exhibit;
use App\Models\Hint;
use App\Models\Question;
use Illuminate\Database\Seeder;

class HigherExhibitsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * Use php artisan db:seed to run the seed files.
     *
     * @return void
     */
    public function run() {

        $higher = new Category(['name' => 'Tactile']);
        $higher->save();
        $higher->badge()->save(new Badge(['image_name' => 'badge1.png']));

        $exhibit = new Exhibit([
            'name' => 'Αναγνώριση συναισθημάτων',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'recognising-emotions',
            'category_id' => $higher->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Αντίστροφο ποδήλατο',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'reverse-bike',
            'category_id' => $higher->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Δωμάτιο Ames',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'ames-room',
            'category_id' => $higher->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Εξωσωματική Εμπειρία',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'out-of-body-experience',
            'category_id' => $higher->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Νευρώνας',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'neuron',
            'category_id' => $higher->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Τύφλωση απροσεξίας',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'inattentional-blindness',
            'category_id' => $higher->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'exhibit_id' => $exhibit->id
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


        $exhibit = new Exhibit([
            'name' => 'Φαινόμενο Stroop',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'stroop-effect',
            'category_id' => $higher->id
        ]);
        $exhibit->save();

        $question = new Question([
            'name' => 'Question 2',
            'description' => '"asdflkjaertvlkjasntvkjn" in kitty language is a sign of ...',
            'exhibit_id' => $exhibit->id
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

    }

}
