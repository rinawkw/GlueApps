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
    return view('home.index');
});

Route::get('/dologin', function () {
    return view('auth.login');
});
Route::get('/home','HomeController@index')->name('home')->middleware('home');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/do_login','AuthController@do_login')->middleware('login');
Route::get('/logout', 'AuthController@logout')->name('logout');