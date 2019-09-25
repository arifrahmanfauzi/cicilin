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
    return view('dashboard');
});

Route::get('/hdtuto', 'HomeController@hdtuto');
Route::get('/scrapper', 'ScrapperController@index');
Route::post('/scrapper', 'ScrapperController@post');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
