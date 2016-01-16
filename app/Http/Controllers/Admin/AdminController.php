<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminController extends Controller
{
<<<<<<< HEAD
   
    public function login(Request $request)
    {

        return view('admin.signin');
    }
=======
>>>>>>> 446bde631f7b59f981fac52ab917db0de0953310

   public function index(){
       return view('admin.index');
   }

}
