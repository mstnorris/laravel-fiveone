<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

get('users', 'PagesController@users');

Route::group(['prefix' => 'api/v1'], function() {
    get('users/{id}/jobs', 'JobsController@index');
    Route::resource('users', 'UsersController');
    Route::resource('jobs', 'JobsController', ['only' => ['index', 'show']]);
});
