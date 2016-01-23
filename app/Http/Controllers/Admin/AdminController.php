<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use Redirect;

class AdminController extends Controller
{

   public function index()
   {
    return view('admin.index');
   }

    //登录
  public function login(Request $request)
    {

      if(Auth::check())
      {
        $info = Auth::user();
        if($info['isadmin'] ==1)
        {
          return Redirect::to('admin');
        }
        
      }
      return view('admin.signin');
    }
    
   //登录
   public function signin(Request $request)
   {
      $username = $request->input('username');
      $password = $request->input('passwd');
      if(Auth::attempt(['username' => $username, 'password' => $password])){
          return Redirect::to('admin')
              ->with('message', '成功登录');
      }else{
         return Redirect::to('admin/login')
              ->with('message', '用户名密码不正确')
              ->withInput();
      }

   }

   //退出
   public function logout()
   {

   }

}
