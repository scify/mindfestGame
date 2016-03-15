<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{

    protected $table = 'categories';

    protected $fillable = ['name', 'description'];

    protected $hidden = ['created_at', 'updated_at'];


    public function exhibits()
    {
        return $this->hasMany('App\Models\Exhibit');
    }

    public function question()
    {
        return $this->hasOne('App\Models\Question');
    }


}
