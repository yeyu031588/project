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
use Session;
use Auth;
class UserController extends Controller
{
   
	
	//注册
	public function register(Request $request)
	{
		if($_POST){
		    $validator = Validator::make($request->all(), [
	            'username' => 'required|unique:users|max:12|min:6',
	        ]);
			if($validator->fails()){
				return view('home.signup')->withErrors($validator);
			}
			$postArr = array(
				'username' => $request->input('username'),
				'password' =>  bcrypt($request->input('password')),
			);
			$user = User::create($postArr);
			if($user){
				$user->userProfile()->create(array());
  				return view('home.login');
			}
		}
        // return view('home.register');
        return view('home.signup');
	}

	//登录
	public function login()
	{
	if(Auth::check())
      {
          return Redirect::to('/');
        
      }
		return view('home.signin');
	}

	public function signin(Request $request)
	{
      $username = $request->input('username');
      $password = $request->input('passwd');
      if(Auth::attempt(['username' => $username, 'password' => $password])){
          return Redirect::to('/')
              ->with('message', '成功登录');
      }else{
         return Redirect::to('login')
              ->with('message', '用户名密码不正确')
              ->withInput();
      }
	}


}
