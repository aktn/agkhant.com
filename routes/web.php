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

Route::get('/', function () {
    return view('welcome');
});


/*
// Skill CRUD
*/
Route::get('/skill/create','SkillController@create');
Route::post('/skill/store','SkillController@store');
Route::get('/skill/edit','SkillController@edit');
Route::post('/skill/update','SkillController@update');
Route::get('/skill/delete','SkillController@delete');
