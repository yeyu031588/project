<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
//前台
Route::any('register', 'Home\UserController@register');
Route::any('login', 'Home\UserController@login');
Route::post('home/signin', 'Home\UserController@signin');

//后台
Route::get('admin/login','Admin\AdminController@login');
Route::any('admin/signin','Admin\AdminController@signin');
Route::group(['namespace' => 'Admin','middleware' => ['adminAuth']], function()
{
	Route::get('admin','AdminController@index');
	Route::get('/admin/user/userlist', 'UserController@userlist');
	Route::get('/admin/user/create', 'UserController@createUser');
	Route::get('/admin/user/profile', 'UserController@userProfile');
});
