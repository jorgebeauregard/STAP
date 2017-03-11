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

Route::resource('screens', 'ScreenController');

Route::resource('ads', 'AdController');

Route::resource('codes', 'CodeController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', function () {
  Auth::logout();
  return view('welcome');
});
