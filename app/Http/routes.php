<?php
/*----------------------------------------------------------------------------*\
     Pattern
\*----------------------------------------------------------------------------*/
Route::pattern('id','[1-9][0-9]*');
/*----------------------------------------------------------------------------*\
     Blog
\*----------------------------------------------------------------------------*/
Route::get('/', 'BlogController@index');
Route::get('single/{slug}', 'BlogController@showPost');
//Route::get('contact', 'BlogController@contact');
Route::get('about', 'BlogController@about');

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

/*----------------------------------------------------------------------------*\
     controllers REST
\*----------------------------------------------------------------------------*/

Route::resource('comment', 'CommentController');
Route::resource('post', 'PostController');

/*----------------------------------------------------------------------------*\
     custom REST
\*----------------------------------------------------------------------------*/
Route::put('post/{id}/status', 'PostController@updateStatus');