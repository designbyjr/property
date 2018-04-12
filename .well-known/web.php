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
    return view('welcome');
});

Route::get('/.well-known/acme-challenge/1khDlZ6OI4W7zLVzN4YB6Bbo7wSH9-QvIvDIG8_0Wlw', function () {
    return dd(__DIR__);
});

Route::post('/register','HomeController@register');