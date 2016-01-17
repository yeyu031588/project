<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminController extends Controller
{

   
    public function login(Request $request)
    {
    	if($request->session()->get('admin_uid'))
    	{
    		return redirect()->guest('/admin');
    	}
      return view('admin.signin');
    }
    
   public function signin()
   {
   		// $username = $request->input('username');
   		// $passwd = $request->input('passwd');
   }

}
