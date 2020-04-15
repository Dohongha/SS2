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
Route::get('/login', function() {
    return view("login.index", ['message' => '']);
});

Route::post('/login', 'LoginController@login');

//{} => Biểu thị id và pid động <== người dùng nhập vào
Route::get('/test/{id}/{pid}', 'LoginController@test');