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


Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/{slug}', 'HomeController@show')->name('home.show');
Route::get('/home/category/{name}', 'HomeController@showCategory')->name('home.showCategory');


Route::resource('articles', 'ArticleController');

Route::resource('categories', 'CategoryController');

