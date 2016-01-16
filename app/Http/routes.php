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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
//前台
Route::get('register', 'Home\UserController@register');

//后台
Route::group(['namespace' => 'Admin','middleware' => ['adminAuth']], function()
{
	Route::get('admin',function(){
		return view('admin.index');
	});
	Route::get('/admin/user/userlist', 'UserController@userlist');
	Route::get('/admin/user/create', 'UserController@createUser');
	Route::get('/admin/user/profile', 'UserController@userProfile');
});
Route::get('admin/login','Admin\AdminController@login');