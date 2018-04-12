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
    return '1khDlZ6OI4W7zLVzN4YB6Bbo7wSH9-QvIvDIG8_0Wlw.op-3CKpbr0gLf3bLsvrgfTjrjNqJ_9_JsaSHDl6DPEw';
});
Route::get('/.well-known/acme-challenge/3oXBBmaS4ZXHzgipGNdTuZj-iy7_0GfPI5ExIjkuqbY', function () {
    return '3oXBBmaS4ZXHzgipGNdTuZj-iy7_0GfPI5ExIjkuqbY.op-3CKpbr0gLf3bLsvrgfTjrjNqJ_9_JsaSHDl6DPEw';
});

Route::post('/register','HomeController@register');