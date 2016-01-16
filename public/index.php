<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
//解析Illuminate\Contracts\Http\Kernel，实例化App\Http\Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
//a.构造函数：设置$app/$router，初始化$router中middleware数值
//handle处理请求 —— 经过路由发送请求：
/**
 * $request是经过Symfony封装的请求对象
 * 注册request实例到容器 ($app[‘request’]->Illuminate\Http\Request)
 * 清空之前容器中的request实例
 * 调用bootstrap方法，启动一系列启动类的bootstrap方法：
 *      1.Illuminate\Foundation\Bootstrap\DetectEnvironment 环境配置（$app[‘env’]）
 *      2.Illuminate\Foundation\Bootstrap\LoadConfiguration  基本配置（$app[‘config’]）
 *      3.Illuminate\Foundation\Bootstrap\ConfigureLogging   日志文件（$app[‘log’]）
 *      4.Illuminate\Foundation\Bootstrap\HandleExceptions   错误&异常处理
 *      5.Illuminate\Foundation\Bootstrap\RegisterFacades    清除已解析的Facade并重新启动，注册config文件中alias定义的所有Facade类到容器
 *      6.Illuminate\Foundation\Bootstrap\RegisterProviders  注册config中providers定义的所有Providers类到容器
 *      7.Illuminate\Foundation\Bootstrap\BootProviders      调用所有已注册Providers的boot方法
 * 通过Pipeline发送请求，经过中间件，再由路由转发，最终返回响应
 */
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();//将响应信息发送到浏览器：

$kernel->terminate($request, $response);//处理继承自TerminableMiddleware接口的中间件（Session）并结束应用生命周期：
