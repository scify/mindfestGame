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

        return \Request::all();

        $user = \Socialite::with('facebook')->user();

        return $user;
    }

}
