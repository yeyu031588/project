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
Route::get('home/user/register','Home\UserController@register');
Route::post('home/user/register','Home\UserController@register');
Route::post('home/user/login','Home\UserController@login');



Route::get('admin',function(){
	return view('admin.index');
});
Route::get('/admin/auth/login', 'Admin\Auth\AuthController@getLogin');
Route::post('/admin/auth/login', 'Admin\Auth\AuthController@postLogin');
Route::get('/admin/auth/logout', 'Admin\Auth\AuthController@getLogout');

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

Route::group(['middleware' => ['web']], function () {
    //
});
