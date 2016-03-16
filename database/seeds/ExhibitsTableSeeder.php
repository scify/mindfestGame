<?php

use App\Models\Badge;
use App\Models\Category;
use App\Models\Exhibit;
use Illuminate\Database\Seeder;

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
        $optical->badge()->save(new Badge(['image_name' => 'badge1.png']));

        $tactile = new Category(['name' => 'Tactile']);
        $tactile->save();
        $tactile->badge()->save(new Badge(['image_name' => 'badge1.png']));

        $auditory = new Category(['name' => 'Auditory']);
        $auditory->save();
        $auditory->badge()->save(new Badge(['image_name' => 'badge1.png']));

        $taste = new Category(['name' => 'Taste']);
        $taste->save();
        $taste->badge()->save(new Badge(['image_name' => 'badge1.png']));


        //generate exhibits
        $exhibit = (new Exhibit([
            'name' => 'Stare at ceiling light',
            'description' => 'Stare at ceiling light chase laser, scratch at the door then walk away but attack dog, run away and pretend to be victim yet chase ball of string, but destroy couch as revenge tuxedo cats always looking dapper. Immediately regret falling into bathtub when in doubt, wash.',
            'image_name' => 'exhibit1.jpg',
            'code' => 'exhibit1',
            'site_url' => 'http://mindfest.org/%CE%B5%CE%BA%CE%B8%CE%AD%CE%BC%CE%B1%CF%84%CE%B1/',
            'category_id' => $optical->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Meme',
            'description' => 'If it fits, i sits make meme, make cute face, and sleep on dog bed, force dog to sleep on floor, and stick butt in face, or pooping rainbow while flying in a toasted bread costume in space eat a plant, kill a hand or attack feet.',
            'image_name' => 'exhibit2.jpg',
            'code' => 'exhibit2',
            'category_id' => $tactile->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Purring',
            'description' => 'Purr while eating ears back wide eyed but chase red laser dot meow throwup on your pillow, and unwrap toilet paper but climb a tree, wait for a fireman jump to fireman then scratch his face. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed rub face on everything',
            'image_name' => 'exhibit3.jpg',
            'code' => 'exhibit3',
            'category_id' => $tactile->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Soft kitty',
            'description' => 'Soft kitty warm kitty little ball of furr chirp at birds for make meme, make cute face walk on car leaving trail of paw prints on hood and windshield yet intrigued by the shower immediately regret falling into bathtub tuxedo cats always looking dapper. Peer out window, chatter at birds, lure them to mouth ears back wide eyed, and stares at human while pushing stuff off a table for intently stare at the same spot, yet scream at teh bath, for scratch leg; meow for can opener to feed me or hide from vacuum cleaner. Climb a tree, wait for a fireman jump to fireman then scratch his face eat grass, throw it back up unwrap toilet paper or chirp at birds.',
            'image_name' => 'exhibit4.jpg',
            'code' => 'exhibit4',
            'category_id' => $taste->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Tuna',
            'description' => 'Sit on the laptop. Burrow under covers eat the fat cats food yet thinking longingly about tuna brine where is my slave? ',
            'image_name' => 'exhibit5.jpg',
            'code' => 'exhibit5',
            'category_id' => $taste->id
        ]))->save();

        $exhibit = (new Exhibit([
            'name' => 'Meowzer!S',
            'description' => '. Leave hair everywhere scream at teh bath. Meowzer!. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed touch water with paw then recoil in horror curl into a furry donut vommit food and eat it again or attack feet, meow for food, then when human fills food dish, take a few bites of food and continue meowing steal the warm chair right after you get up',
            'image_name' => 'exhibit6.jpg',
            'code' => 'exhibit6',
            'category_id' => $auditory->id
        ]))->save();

    }

}
