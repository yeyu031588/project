<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
   
	public function getUser(Request $request)
	{
		$user = new User;
		$result = $user->getUser();
		echo '<pre>';
		print_r($result);
		echo '</pre>';
	}

    public function login(){
        var_dump($_POST);
        die();
    }


}
