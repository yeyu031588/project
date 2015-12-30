<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-12-29
 * Time: 下午11:29
 */
namespace App\Http\Controllers\Session;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class SessionController extends Controller{
    public function index(){

    }

    /**
     * @param Request $request
     */
    public function getSession(Request $request){

    session_start();

         $value = $request->session()->get('key');
dd($value);
          // $value = $request->session()->get('key');
          // echo $value;
          // exit;
        $value = Session::get('key','default');
        var_dump($value);
        die();
    }


    public function setSession(Request $request){
//          $value = $request->session()->put('key','aaaaa');
// exit;
        // if (!session::has('key')) {
            //
            $value = Session::put('key', 'value');//这样是错误的,不知道是不是session没开启还是什么的
//            var_dump($value);
//            die();
        // }
    }

    public function clearSession(){
        //删除key
//        Session::forget('key');
        Session::flush();
    }
}
