<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use \App\Models\Exhibit;

class ExhibitsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * Use php artisan db:seed to run the seed files.
     *
     * @return void
     */
    public function run() {

        //generate categories
        $optical = new Category(['name' => 'Optical']);
        $optical->save();
        $tactile = new Category(['name' => 'Tactile']);
        $tactile->save();
        $auditory = new Category(['name' => 'Auditory']);
        $auditory->save();
        $taste = new Category(['name' => 'Taste']);
        $taste->save();

        //generate exhibits
        $exhibit = (new Exhibit([
            'name' => 'Stare at ceiling light',
            'description' => 'Stare at ceiling light chase laser, scratch at the door then walk away but attack dog, run away and pretend to be victim yet chase ball of string, but destroy couch as revenge tuxedo cats always looking dapper. Immediately regret falling into bathtub when in doubt, wash.',
            'image_name' => 'exhibit1.jpg',
            'category_id' => $optical->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Meme',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'category_id' => $tactile->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Purring',
            'description' => 'Purr while eating ears back wide eyed but chase red laser dot meow throwup on your pillow, and unwrap toilet paper but climb a tree, wait for a fireman jump to fireman then scratch his face. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed rub face on everything',
            'image_name' => 'exhibit3.jpg',
            'category_id' => $tactile->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Soft kitty',
            'description' => 'Soft kitty warm kitty little ball of furr chirp at birds for make meme, make cute face walk on car leaving trail of paw prints on hood and windshield yet intrigued by the shower immediately regret falling into bathtub tuxedo cats always looking dapper. Peer out window, chatter at birds, lure them to mouth ears back wide eyed, and stares at human while pushing stuff off a table for intently stare at the same spot, yet scream at teh bath, for scratch leg; meow for can opener to feed me or hide from vacuum cleaner. Climb a tree, wait for a fireman jump to fireman then scratch his face eat grass, throw it back up unwrap toilet paper or chirp at birds.',
            'image_name' => 'exhibit4.jpg',
            'category_id' => $taste->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Tuna',
            'description' => 'Sit on the laptop. Burrow under covers eat the fat cats food yet thinking longingly about tuna brine where is my slave? ',
            'image_name' => 'exhibit5.jpg',
            'category_id' => $taste->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Meowzer!S',
            'description' => '. Leave hair everywhere scream at teh bath. Meowzer!. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed touch water with paw then recoil in horror curl into a furry donut vommit food and eat it again or attack feet, meow for food, then when human fills food dish, take a few bites of food and continue meowing steal the warm chair right after you get up',
            'image_name' => 'exhibit6.jpg',
            'category_id' => $auditory->id
        ]))->save();

    }

}
