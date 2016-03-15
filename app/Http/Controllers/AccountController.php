<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class AccountController extends Controller {


    public function login(){
        return view('login');
    }


    public function github_redirect() {
        return \Socialize::with('github')->redirect();
    }

    // to get authenticate user data
    public function github() {
        $user = \Socialize::with('github')->user();
        // Do your stuff with user data.
       dd($user);
    }
}
