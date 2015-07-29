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

Route::get('contact', 'ContactController@getContact');
Route::post('contact_request','ContactController@getContactUsForm');

/*----------------------------------------------------------------------------*\
     Auth
\*----------------------------------------------------------------------------*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/*----------------------------------------------------------------------------*\
     Dashboard
\*----------------------------------------------------------------------------*/

Route::get('dashboard', 'Admin\DashboardController@index');
Route::get('dashboard/comment/unpublished', 'Admin\DashboardController@showUnpublishedComments');
Route::get('dashboard/comment/index', 'Admin\DashboardController@indexComments');




/*----------------------------------------------------------------------------*\
     controllers REST
\*----------------------------------------------------------------------------*/

Route::resource('comment', 'CommentController');
Route::resource('post', 'PostController');

/*----------------------------------------------------------------------------*\
     custom REST
\*----------------------------------------------------------------------------*/
Route::put('comment/{id}/updateStatus', 'CommentController@updateStatus');
Route::get('dashboard/comment/{id}/edit', 'CommentController@edit');
Route::get('dashboard/comment/{id}', 'CommentController@destroy');
Route::get('dashboard/comment/{id}', 'CommentController@update');

Route::put('post/{id}/updateStatus', 'PostController@updateStatus');