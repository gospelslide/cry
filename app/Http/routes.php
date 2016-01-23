<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Admin routes */
Route::get('admin', 'AdminController@display');
Route::post('admin/validate', 'AdminController@login');
Route::get('admin/home', 'AdminController@index');
Route::get('admin/account/edit', 'AdminController@update');
Route::get('admin/volunteer/requests', 'AdminController@volunteer');
Route::get('admin/suggestions', 'AdminController@meal');
Route::get('admin/donation/approve', 'AdminController@approve');
Route::get('admin/requirements', 'AdminController@requirement');
/* Admin routes */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
