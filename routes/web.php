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
Route::resource('events', 'EventsController',['only' => ['index', 'store', 'update', 'destroy']]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('posts/create', 'PostsController@create');
Route::get('blog', 'PostsController@index');
Route::post('posts', 'PostsController@store');
