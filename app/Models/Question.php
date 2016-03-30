<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model{

    protected $table = 'questions';

    protected $fillable = ['name', 'description', 'exhibit_id'];

    protected $hidden = ['created_at', 'updated_at', 'exhibit_id'];


    public function answers()
    {
        return $this->hasMany('App\Models\Answer')->orderBy(\DB::raw('RAND()'));
    }


    public function hint()
    {
        return $this->hasOne('App\Models\Hint');
    }

    public function exhibit()
    {
        return $this->belongsTo('App\Models\Exhibit');
    }
}
