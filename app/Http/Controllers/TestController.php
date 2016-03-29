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

        $user = \Auth::user();

        return $user->socialUser;

        $share = \Share::load('http://www.example.com', 'Link description')->services('facebook', 'gplus', 'twitter');
        return $share;
    }

}
