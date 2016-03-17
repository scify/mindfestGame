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
        try {
            $user = \Socialite::with('twitter')->user();
            $user = $this->accountService->postLogin($user, 'twitter');
            return \Redirect::to('exhibits/scanOrCode');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function googlePlus_redirect() {
        return \Socialite::with('google')->redirect();
    }

    // to get authenticate user data
    public function googlePlus() {
        try {
            $user = \Socialite::with('google')->user();
            $user = $this->accountService->postLogin($user, 'googlePlus');
            return \Redirect::to('exhibits/scanOrCode');
        } catch (\Exception $e) {
            dd($e);
        }
    }

}
