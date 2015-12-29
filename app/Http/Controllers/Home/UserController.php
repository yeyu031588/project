<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use URL;
use Redirect;
class UserController extends Controller
{
   
	
	//注册
	public function register(Request $request)
	{
		if($_POST){
		    $validator = Validator::make($request->all(), [
	            'username' => 'required|unique:user|max:12|min:6',
	        ]);
			if($validator->fails()){
				return view('home/register')->withErrors($validator);
			}
			//注册
			$postArr = array(
				'username' => $request->input('username'),
				'password' => md5($request->input('password','123456'))
			);
			$user = User::create($postArr);
			if($user){
				$user->userProfile()->create(array());
  				return view('home.login');
			}
		}
        return view('home.register');
	}




}
