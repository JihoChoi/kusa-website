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
Route::get('board', 'MembersController@directBoard');

/*Test route for email*/

Route::get('email', 'MembersController@directEmail');

/* User Profile Routes */
Route::get('profile', 'MembersController@directProfile');
Route::post('profile', 'MembersController@updateProfileImage');
Route::post('profile_update', 'MembersController@updateProfile');

Route::group(['middleware' => 'adminauth'], function () {
    Route::get('dashboard', 'AdminController@directDashboard');

  /* Post Manage Routes*/
  Route::get('post', 'AdminController@directPost');
    Route::post('post', 'PostsController@postContent');
    Route::post('disp-img', 'PostsController@dispImg');

  /* Event Category Manage Routes */
  Route::get('event-category-manage', 'AdminController@directEventCategoryManage');
    Route::post('event-category-manage', 'EventCategoryController@postEventCategory');
    Route::post('event-category-manage-edit', 'EventCategoryController@modifyEventCategory');
    Route::get('event-category-manage-delete/{category_id}', 'EventCategoryController@deleteEventCategory');

  /* Team Manage Routes */
  Route::get('team-manage', 'AdminController@directTeamManage');
    Route::post('team-manage', 'TeamController@postTeamTitle');
    Route::post('team-manage-edit', 'TeamController@modifyTeam');
    Route::get('team-manage-delete/{team_id}', 'TeamController@deleteTeam');

  /* Role Manage Routes */
  Route::get('role-manage', 'AdminController@directRoleManage');
    Route::post('role-manage', 'RoleController@postRole');
    Route::post('role-manage-edit', 'RoleController@modifyRole');
    Route::get('role-manage-delete/{role_id}', 'RoleController@deleteRole');

  /* User Manage Routes */
  Route::get('user-manage', 'MembersController@filterUsers');
    Route::post('user-manage', 'MembersController@filterUsers');
    Route::get('user-manage-edit/{user_id}', 'MembersController@directModify');
    Route::post('user-manage-edit', 'MembersController@modifyUser');
    Route::get('user-manage-delete/{user_id}', 'MembersController@deleteUser');


});
