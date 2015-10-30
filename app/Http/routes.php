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

Route::get('/home', function () {
    return view('home');
});
/**
 * Authentication
 */
Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function() {

    /**
     * Login and logout
     */
    Route::get('/login', 'AuthController@getLogin');
    Route::get('/logout', 'AuthController@getLogout');
    Route::post('/login', 'AuthController@postLogin');

    /**
     * Registration
     */
    Route::get('/register', 'AuthController@getRegister');
    Route::post('/register', 'AuthController@postRegister');
});
