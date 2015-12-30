<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-12-29
 * Time: 下午11:29
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Routing\Controller;

class SessionController extends Controller{
    public function index(){

    }

    /**
     * @param Request $request
     */
    public function getSession(){
        $value = session::get('key','default');
        var_dump($value);
        die();
    }


    public function setSession(){
        if (!session::has('key')) {
            //
            $value = session::put('key', 'value');//这样是错误的,不知道是不是session没开启还是什么的
//            var_dump($value);
//            die();
        }
    }

    public function clearSession(){
        //删除key
//        Session::forget('key');
        session::flush();
    }
}
