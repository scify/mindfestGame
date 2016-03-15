<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model{

    protected $table = 'questions';

    protected $fillable = ['name', 'description', 'category_id'];

    protected $hidden = ['created_at', 'updated_at', 'category_id'];


    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }


    public function hint()
    {
        return $this->hasOne('App\Models\Hint');
    }
}
