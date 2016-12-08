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
    return view('index');
});

Route::get('login', 'MembersController@directLogin');
Route::post('login', 'MembersController@doLogin');
Route::get('register', 'MembersController@directRegister');
Route::post('register', 'MembersController@doRegister');
