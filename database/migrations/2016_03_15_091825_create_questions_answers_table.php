<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsAnswersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description', 1000);

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->timestamps();
        });

        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description', 1000);
            $table->boolean('isCorrect')->default(false)->nullable();

            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');

            $table->timestamps();
        });

        Schema::create('hints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description', 1000);

            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('hints');
        Schema::drop('answers');
        Schema::drop('questions');
    }
}
