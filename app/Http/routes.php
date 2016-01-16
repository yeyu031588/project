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
Route::get('forum/',function(){
	return view('forum.forum');
});
Route::get('home/user/register','Home\UserController@register');
Route::post('home/user/register','Home\UserController@register');
Route::get('home/user/login','Home\UserController@login');


Route::group(['namespace' => 'Admin','middleware' => ['adminAuth']], function()
{
	Route::get('admin',function(){
		return view('admin.index');
	});
	Route::get('/admin/auth/login', 'Auth\AuthController@getLogin');
	Route::post('/admin/auth/login', 'Auth\AuthController@postLogin');
	Route::get('/admin/auth/logout', 'Auth\AuthController@getLogout');
	Route::get('/admin/user/userlist', 'UserController@userlist');
	Route::get('/admin/user/create', 'UserController@createUser');
	Route::get('/admin/user/profile', 'UserController@userProfile');
});
Route::get('admin/login','Admin\AdminController@login');


Route::filter('auth.basic', function()
{
    return Auth::basic('name');
});

Route::group([ 'middleware' => 'auth'], function()
{
    Route::get('/', 'AdminController@index');
});
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
