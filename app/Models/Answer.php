<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model{

    protected $table = 'answers';

    protected $fillable = ['name', 'description', 'isCorrect', 'question_id'];

    protected $hidden = ['created_at', 'updated_at', 'question_id'];

}
