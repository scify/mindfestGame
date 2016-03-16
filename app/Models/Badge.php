<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model{

    protected $table = 'category_badges';

    protected $fillable = ['name', 'description', 'image_name', 'category_id'];

    protected $hidden = ['created_at', 'updated_at', 'category_id'];
}
