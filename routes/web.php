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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'HomeController@index')->name('login');
    Route::post('/', 'HomeController@authenticate');

    Route::get('/forgot', 'HomeController@forgot')->name('forgot');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
});
