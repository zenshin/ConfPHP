<?php
/*----------------------------------------------------------------------------*\
     Pattern
\*----------------------------------------------------------------------------*/
Route::pattern('id','[1-9][0-9]*');
/*----------------------------------------------------------------------------*\
     Front
\*----------------------------------------------------------------------------*/
Route::get('/', 'FrontController@index');
Route::get('conference/{slug}', 'FrontController@showPost');
Route::get('about', 'FrontController@about');
Route::get('mentions_legales', 'FrontController@legal');
Route::get('tag/{name}','FrontController@showPostByTag');

Route::get('contact', 'ContactController@getContact');
Route::post('contact_request','ContactController@getContactUsForm');

/*----------------------------------------------------------------------------*\
     Auth
\*----------------------------------------------------------------------------*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('login', 'Auth\AuthController@getLogin');
Route::get('logout','Auth\AuthController@getLogout');
Route::post('login','Auth\AuthController@postLogin');

/*----------------------------------------------------------------------------*\
     Dashboard
\*----------------------------------------------------------------------------*/

Route::get('dashboard', 'Admin\DashboardController@index');
Route::get('dashboard/comment/unpublished', 'Admin\DashboardController@showUnpublishedComments');
Route::get('dashboard/comment/index', 'Admin\DashboardController@indexComments');

/*----------------------------------------------------------------------------*\
     controllers REST
\*----------------------------------------------------------------------------*/

Route::resource('dashboard/comment', 'CommentController');
Route::resource('post', 'PostController');

/*----------------------------------------------------------------------------*\
     custom REST
\*----------------------------------------------------------------------------*/

Route::put('comment/{id}/updateStatus', 'CommentController@updateStatus');
Route::put('comment/{id}/updateSpamStatus', 'CommentController@updateSpamStatus');
Route::put('post/{id}/updateStatus', 'PostController@updateStatus');