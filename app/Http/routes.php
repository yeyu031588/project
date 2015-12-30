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
Route::get('/cache/test','CacheController@test');
Route::get('/cache/index','CacheController@index');
Route::get('/cache/setCache','CacheController@setCache');
Route::get('/cache/clearCache','CacheController@clearCache');


Route::get('admin/login','Admin\AdminController@login');
Route::get('admin/index','Admin\AdminController@index');
Route::get('admin/user/getUser','Admin\UserController@getUser');

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

// Route::group(['middleware' => ['web']], function () {
//     //
// });

Route::group(['namespace' => 'Session'], function(){
  Route::get('/session/getSession','SessionController@getSession');
Route::get('/session/setSession','SessionController@setSession');
Route::get('/session/clearSession','SessionController@clearSession');
});