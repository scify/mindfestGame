<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        $this->call('AuditoryExhibitsTableSeeder');
        $this->call('HigherExhibitsTableSeeder');
        $this->call('OpticalExhibitsTableSeeder');
        $this->call('TactileExhibitsTableSeeder');
        $this->call('TasteExhibitsTableSeeder');

        Model::reguard();
    }
}
