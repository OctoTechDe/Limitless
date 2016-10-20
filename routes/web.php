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

Route::group(['middleware' => ['auth', 'tenant']], function () {

    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    });

    Route::get('/token', function () {
        return view('backend.api.token');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');
