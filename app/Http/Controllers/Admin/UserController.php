<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
   
	public function userlist(Request $request)
	{
		return view('admin.user.user-list');
	}

	public function createUser(Request $request)
	{
		return view('admin.user.new-user');
	}

	public function userProfile(Request $request)
	{
		return view('admin.user.user-profile');
	}
	public function login(Request $request)
	{
		return view('admin.signin');
	}


}
