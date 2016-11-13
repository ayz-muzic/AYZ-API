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



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/genres', 'API\MusicsController@genres');
Route::get('/artists', 'API\MusicsController@artists');
Route::get('/musics/list', 'API\MusicsController@musicList');
Route::get('/music/download/{id}', 'API\MusicsController@getMusic');
Route::get('/lyric/{id}', 'API\MusicsController@getLyric');