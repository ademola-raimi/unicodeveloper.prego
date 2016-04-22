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

Route::get('/', [ 
    'uses' => 'HomeController@index',
    'as' => 'index',
]);

Route::get('/auth/register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as'   => 'auth.register',
    'middleware' => ['guest']
]);
 
Route::post('/auth/register', [
    'uses' => 'Auth\AuthController@postRegister',
    'middleware' => ['guest']
]);
 
Route::get('/auth/signin', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'auth.login',
    'middleware' => ['guest']
]);
 
Route::post('/auth/signin', [
    'uses' => 'Auth\AuthController@postLogIn',
    'middleware' => ['guest']
]);

Route::get('/logout', [
    'uses' => 'Auth\AuthController@logOut',
    'as'   => 'auth.logout'
]);