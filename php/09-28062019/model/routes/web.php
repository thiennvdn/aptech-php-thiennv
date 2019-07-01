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

Route::get('users/index', 'UserController@index')->name('index');
Route::get('users/create', 'UserController@create');
Route::post('users/index', 'UserController@store');
Route::get('users/{id}', 'UserController@show')->name('show');
Route::delete('users/{id}', 'UserController@destroy');
Route::get('users/{id}/edit', 'UserController@edit');
Route::put('users/index', 'UserController@update');


