<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('exhibits/{id}', 'ExhibitController@show');
Route::get('exhibits/{id}/question', 'ExhibitController@question');
Route::get('questions/{id}/checkAnswer', 'QuestionController@checkAnswer');


Route::get('login', 'AccountController@login');


// Redirect to github to authenticate
Route::get('github', 'AccountController@github_redirect');
// Get back to redirect url
Route::get('account/github', 'AccountController@github');


Route::get('test', 'TestController@test');

