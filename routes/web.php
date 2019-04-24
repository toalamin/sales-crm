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
    Route::get('/', 'AuthController@index')->name('admin.login');
    Route::post('/', 'AuthController@authenticate');

    Route::get('/forgot', 'AuthController@forgot')->name('admin.forgot');

    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', 'AuthController@index')->name('customer.login');
        Route::post('/', 'AuthController@authenticate');

        Route::get('/forgot', 'AuthController@forgot')->name('customer.forgot');
    });
});

// Customer
// Admin
Route::group(['middleware' => 'auth:customer', 'prefix' => 'customer'], function () {
    Route::get('/logout', 'AuthController@logout')->name('customer.logout');
    Route::get('/dashboard', 'HomeController@dashboard')->name('customer.dashboard');
});

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'AuthController@logout')->name('admin.logout');
    Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');

    Route::resource('/customers', 'CustomersController', [
        'as' => 'admin',
    ]);
});
