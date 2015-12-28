<?php

namespace App\Http\Controllers\Home;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
class UserController extends Controller
{
   
	

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
			$postArr['user'] = array(
				'username' => $request->input('username'),
				'password' => md5($request->input('password','123456'))
			);
			$user = new User;
			$user->addUser($postArr);
		}
        return view('home.register');
	}


}
