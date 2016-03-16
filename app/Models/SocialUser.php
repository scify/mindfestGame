<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model{

    protected $table = 'social_users';

    protected $fillable = ['name', 'nickname', 'email', 'avatar', 'social_media', 'social_id'];

    protected $hidden = ['created_at', 'updated_at'];


    public function questions()
    {
        return $this->hasMany('App\Models\Question', 'social_users_questions');
    }
}
