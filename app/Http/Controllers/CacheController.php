<?php
namespace App\Http\Controllers;

use Cache;
use Illuminate\Routing\Controller;

class CacheController extends Controller
{
    /**
     *查看缓存
     */
    public function index()
    {
        $value = Cache::get('key','default');

        var_dump($value);
        die();
        //
    }
    public function test(){
        echo "------test-----";
        die();
    }

    /**
     *设置缓存
     */
    public function setCache(){
        if (!Cache::has('key')) {
            //
            Cache::put('key', 'value', 7200);
        }

    }

    /**
     *清楚缓存
     */
    public function clearCache(){
        Cache::flush();
    }
}