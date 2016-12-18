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

Route::get('/', 'MembersController@directIndex');
Route::get('login', 'MembersController@directLogin');
Route::post('login', 'MembersController@doLogin');
Route::get('register', 'MembersController@directRegister');
Route::post('register', 'MembersController@doRegister');
Route::get('logout', 'MembersController@doLogout');
Route::get('register/verify/{confirmation_code}', 'MembersController@confirm');

Route::group(['middleware' => 'auth'], function() {

  Route::get('dashboard', 'AdminController@directDashboard');
  Route::get('post', 'AdminController@directPost');
  Route::post('post', 'PostsController@postContent');

  Route::get('event-category-manage', 'AdminController@directEventCategoryManage');
  Route::post('event-category-manage', 'EventCategoryController@postEventCategory');

  Route::post('event-category-manage-edit', 'EventCategoryController@modifyEventCategory');
  Route::get('event-category-manage-delete/{category_id}', 'EventCategoryCOntroller@deleteEventCategory');

});
