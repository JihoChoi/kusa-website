<?php

Route::group(['middleware' => 'web'], function() {

  Route::get('/', 'MembersController@directIndex');
  Route::get('login', 'MembersController@directLogin');
  Route::post('login', 'MembersController@doLogin');
  Route::get('register', 'MembersController@directRegister');
  Route::post('register', 'MembersController@doRegister');
  Route::get('logout', 'MembersController@doLogout');
  Route::get('register/verify/{confirmation_code}', 'MembersController@confirm');
  Route::get('board', 'MembersController@directBoard');
  Route::get('announcements', 'PostsController@directAnnouncements');
  Route::get('events', 'PostsController@directEvents');
  Route::get('view/{id}', 'PostsController@viewPost');

  /*Test route for email*/
  Route::get('email', 'MembersController@directEmail');

});

Route::group(['middleware' => 'auth'], function() {
  /* User Profile Routes */
  Route::get('profile', 'MembersController@directProfile');
  Route::post('profile', 'MembersController@updateProfileImage');
  Route::post('profile_update', 'MembersController@updateProfile');
  Route::post('change_password', 'MembersController@changePassword');
});

Route::group(['middleware' => 'adminauth'], function () {

  Route::get('dashboard', 'AdminController@directDashboard');

  /* Post Manage Routes*/
  Route::get('post', 'AdminController@directPost');
  Route::post('post', 'PostsController@postContent');
  Route::get('post/{post_id}/postimages', 'AdminController@directPostImages');

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

Route::group(['middleware' => 'api'], function() {

  Route::get('/api/v1/posts', 'PostsController@toJsonPosts');
  Route::get('/api/v1/post/{id}', 'PostsController@toJsonPost');
  Route::get('/api/v1/event_categories', 'PostsController@toJsonEventCategories');
  Route::get('/api/v1/event_category/{id}', 'PostsController@toJsonEventCategory');
  Route::get('/api/v1/teams', 'MembersController@toJsonTeams');
  Route::get('/api/v1/team/{id}', 'MembersController@toJsonTeam');
  Route::get('/api/v1/members', 'MembersController@toJsonMembers');

});
