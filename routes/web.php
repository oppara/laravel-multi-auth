<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('login','AdminAuthController@showLoginForm');
        Route::post('login','AdminAuthController@login');
    });
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/','AdminHomeController@index');
        Route::get('home','AdminHomeController@index');
        Route::get('logout','AdminAuthController@logout');
    });
});

Auth::routes();
Route::get('/home', 'HomeController@index');
