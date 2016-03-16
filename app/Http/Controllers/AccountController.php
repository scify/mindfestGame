<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\AccountService;

class AccountController extends Controller {


    private $accountService;

    public function __construct() {
        $this->accountService = new AccountService();
    }

    public function login() {
        return view('login');
    }

    public function facebook_redirect() {
        return \Socialite::with('facebook')->redirect();
    }

    // to get authenticate user data
    public function facebook() {
        try {
            $user = \Socialite::with('facebook')->user();
            $user = $this->accountService->postLogin($user, 'facebook');

            return \Redirect::to('exhibits/scanOrCode');
        } catch (\Exception $e) {
            dd($e);
        }
    }


    public function twitter_redirect() {
        return \Socialite::with('twitter')->redirect();
    }

    // to get authenticate user data
    public function twitter() {
        $user = \Socialite::with('twitter')->user();

        /*  $socialUser = $this->saveSocialUser($user, 'twitter');

          return $socialUser;*/
    }

    public function googlePlus_redirect() {
        return \Socialite::with('googlePlus')->redirect();
    }

    // to get authenticate user data
    public function googlePlus() {
        $user = \Socialite::with('googlePlus')->user();

        /*    $socialUser = $this->saveSocialUser($user, 'googlePlus');

            return $socialUser;*/
    }

}
