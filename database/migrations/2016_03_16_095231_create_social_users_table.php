<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('social_id')->nullable();
            $table->string('nickname')->nullable();
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('avatar')->nullable();
            $table->string('social_media')->nullable();

            $table->timestamps();
        });

        Schema::create('users_social_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('social_user_id')->unsigned();
            $table->foreign('social_user_id')->references('id')->on('social_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users_social_users');
        Schema::dropIfExists('social_users');
    }
}
