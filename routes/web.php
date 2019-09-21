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
    return view('form-pengajuan');
});

Route::get('/bayar', function () {
    return view('form-pembayaran');
});

Route::get('/admin/list-permintaan', function () {
    return view('list-permintaan');
});

Route::get('/hdtuto', 'HomeController@hdtuto');
Route::get('/scrapper', 'ScrapperController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
