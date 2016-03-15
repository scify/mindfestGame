<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibit extends Model{

    protected $table = 'exhibits';

    protected $fillable = ['name', 'description', 'image_name', 'category_id'];

    protected $hidden = ['created_at', 'updated_at', 'category_id'];


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
