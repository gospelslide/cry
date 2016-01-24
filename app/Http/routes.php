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
Route::get('admin/logout', 'AdminController@logout');
Route::get('admin/volunteer/requests', 'AdminController@volunteer');
Route::get('admin/suggestions', 'AdminController@meal');
Route::get('admin/donation/approve', 'AdminController@approve');
Route::get('admin/requirements', 'AdminController@requirement');
/* Admin routes */

/* Donotion routes */
Route::get('donate', 'DonationController@display');
Route::post('donate', 'DonationController@submit');
Route::get('contact', 'DonationController@contact');
/* Donation routes */

/* Volunteer routes */
Route::get('volunteer', 'VolunteerController@display');
Route::post('volunteer/validate', 'VolunteerController@login');
Route::post('volunteer/register', 'VolunteerController@register');
Route::get('volunteer/logout', 'VolunteerController@logout');
Route::get('volunteer/task', 'VolunteerController@task');
Route::get('volunteer/home', 'VolunteerController@index');
Route::get('volunteer/account/edit', 'VolunteerController@update');
Route::get('volunteer/request', 'VolunteerController@request');
/* Volunteer routes */
  
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
