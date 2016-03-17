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

Route::get('exhibits/scanOrCode', 'ExhibitController@scanOrCode');
Route::get('exhibits/getByCode', 'ExhibitController@getByCode');
Route::get('exhibits/{id}', 'ExhibitController@show');
Route::get('exhibits/{id}/question', 'ExhibitController@question');
Route::get('questions/{id}/checkAnswer', 'QuestionController@checkAnswer');
Route::get('reward/{questionId}', 'QuestionController@rewardUser');


Route::get('auth/login', 'AccountController@login');



Route::get('login/facebook', 'AccountController@facebook_redirect');// Redirect to github to authenticate
Route::get('account/facebook', 'AccountController@facebook');// Get back to redirect url
Route::get('login/twitter', 'AccountController@twitter_redirect');// Redirect to github to authenticate
Route::get('account/twitter', 'AccountController@twitter');// Get back to redirect url
Route::get('login/googlePlus', 'AccountController@googlePlus_redirect');// Redirect to github to authenticate
Route::get('account/googlePlus', 'AccountController@googlePlus');// Get back to redirect url

Route::get('test', 'TestController@test');

