<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function test()
    {
        $taste = Category::where('name', 'Taste')->first(['id']);

        return $taste;

    }

}