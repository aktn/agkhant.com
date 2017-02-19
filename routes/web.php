<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


/*
// Skill CRUD
*/
Route::resource('skill','SkillController');

// Profile CRUD
Route::resource('profile','ProfileController');

/*
//AUTH LOGIN
*/
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');