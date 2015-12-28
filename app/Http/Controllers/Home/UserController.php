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
	            'usernames' => 'required|unique:user|max:12|min:6',
	        ]);
			if($validator->fails()){
				return view('home/register')->withErrors($validator);
			}
		}
        return view('home.register');
	}


}
