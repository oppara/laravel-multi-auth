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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('login','AuthController@showLoginForm');
        Route::post('login','AuthController@login');
    });
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/','HomeController@index');
        Route::get('home','HomeController@index');
        Route::get('logout','AuthController@logout');
    });
});

Route::group(['prefix' => 'member', 'namespace' => 'Member'], function () {
    Route::group(['middleware' => 'guest:member'], function () {
        Route::get('login','AuthController@showLoginForm');
        Route::post('login','AuthController@login');
    });
    Route::group(['middleware' => 'auth:member'], function () {
        Route::get('/','HomeController@index');
        Route::get('home','HomeController@index');
        Route::get('logout','AuthController@logout');
    });
});

Auth::routes();
Route::get('/home', 'HomeController@index');
