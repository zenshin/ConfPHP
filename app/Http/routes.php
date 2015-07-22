<?php
/*----------------------------------------------------------------------------*\
     Pattern
\*----------------------------------------------------------------------------*/
Route::pattern('id','[1-9][0-9]*');
/*----------------------------------------------------------------------------*\
     Blog
\*----------------------------------------------------------------------------*/
Route::get('/', 'BlogController@index');
Route::get('single/{id}/{slug?}', 'BlogController@showPost');
Route::get('tag/{id}', 'BlogController@showPostByTag');
Route::get('contact', 'BlogController@contact');
Route::get('about', 'BlogController@about');

Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@show');
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


/*----------------------------------------------------------------------------*\
     controllers REST
\*----------------------------------------------------------------------------*/

Route::resource('comment', 'CommentController');
Route::resource('post', 'PostController');