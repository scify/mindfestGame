<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hint extends Model{

    protected $table = 'hints';

    protected $fillable = ['name', 'description', 'question_id'];

    protected $hidden = ['created_at', 'updated_at', 'question_id'];
}
