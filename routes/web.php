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
Route::get('/hdtuto', function() {

    $crawler = Goutte::request('GET', 'https://www.tokopedia.com/');

    $crawler->filter('.blog-post-item h2 a')->each(function ($node) {

      dump($node->text());

    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
