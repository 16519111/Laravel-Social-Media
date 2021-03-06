<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

// Post
Route::resource('post', 'PostController');
Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{post_id}', 'PostController@show');
Route::put('/post/{post_id}', 'PostController@update');
Route::delete('/post/{post_id}', 'PostController@destroy');
