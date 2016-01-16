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

        return view('admin.signin');
    }


}
