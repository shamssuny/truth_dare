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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/questions','QuestionController@show')->middleware('auth');

Route::get('/profile/{id}','QuestionController@showUserProfile');

Route::get('/profile/{id}/create','QuestionController@createview');

Route::post('/profile/{id}/create','QuestionController@create');

Route::post('questions/{id}','AnswerController@ans')->middleware('auth');
