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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addmovie', 'MovieController@show')->name('add');

Route::post('/addmovie', 'MovieController@add')->name('confirmation');

Route::get('/mymovies', 'MovieController@index')->name('moviesList');