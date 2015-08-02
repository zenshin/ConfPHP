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

//Route::post('conference/comment','FrontController@storeComment');

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

Route::resource('dashboard/comment', 'CommentController');
Route::resource('post', 'PostController');

/*----------------------------------------------------------------------------*\
     custom REST
\*----------------------------------------------------------------------------*/
//Route::get('dashboard/comment/create', 'CommentController@create');
//Route::get('dashboard/commentStore', 'CommentController@store');
//Route::get('dashboard/comment/{id}/edit', 'CommentController@edit');
//Route::put('dashboard/comment/{id}', 'CommentController@update');
//Route::delete('dashboard/comment/{id}', 'CommentController@destroy');

//GET 		comment/create		index		comment/create.blade.php
//POST 		comment 			store		“traitement dans l’action”
//GET 		comment/{id}/edit	edit		comment/edit.blade.php
//PUT 		comment/{id}		update	     “traitement dans l’action”
//DELETE    comment/{id}	                 delete              “création d’un template

Route::put('comment/{id}/updateStatus', 'CommentController@updateStatus');
Route::put('comment/{id}/updateSpamStatus', 'CommentController@updateSpamStatus');
Route::put('post/{id}/updateStatus', 'PostController@updateStatus');