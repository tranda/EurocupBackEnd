<?php

use Illuminate\Support\Facades\Route;

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

Route::get('register', 'UserController@showRegistrationForm')->name('register');
Route::post('register', 'UserController@register');
Route::get('login', 'AuthController@login')->name('login');
Route::post('login', 'AuthController@authenticate');
