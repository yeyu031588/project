<?php

namespace App\Services;

use Route;

/**
 * 系统路由
 * 
 * 注：大部分的路由及控制器所执行的动作来说，
 * 
 * 你需要返回完整的 Illuminate\Http\Response 实例或是一个视图
 *
 * @author jiang <mylampblog@163.com>
 */
class Routes
{
    private $adminDomain;

    /**
     * 初始化，取得配置
     *
     * @access public
     */
    public function __construct()
    {
        $this->adminDomain = config('sys.sys_admin_domain');
    }


    public function admin()
    {
        Route::group(['domain' => $this->adminDomain], function()
        {
            Route::group(['middleware' => ['csrf']], function()
            {
                Route::get('/', 'Admin\Foundation\LoginController@index');
            });
        });
        return $this;
    }

}
