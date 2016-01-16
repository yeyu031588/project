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
//����Illuminate\Contracts\Http\Kernel��ʵ����App\Http\Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
//a.���캯��������$app/$router����ʼ��$router��middleware��ֵ
//handle�������� ���� ����·�ɷ�������
/**
 * $request�Ǿ���Symfony��װ���������
 * ע��requestʵ�������� ($app[��request��]->Illuminate\Http\Request)
 * ���֮ǰ�����е�requestʵ��
 * ����bootstrap����������һϵ���������bootstrap������
 *      1.Illuminate\Foundation\Bootstrap\DetectEnvironment �������ã�$app[��env��]��
 *      2.Illuminate\Foundation\Bootstrap\LoadConfiguration  �������ã�$app[��config��]��
 *      3.Illuminate\Foundation\Bootstrap\ConfigureLogging   ��־�ļ���$app[��log��]��
 *      4.Illuminate\Foundation\Bootstrap\HandleExceptions   ����&�쳣����
 *      5.Illuminate\Foundation\Bootstrap\RegisterFacades    ����ѽ�����Facade������������ע��config�ļ���alias���������Facade�ൽ����
 *      6.Illuminate\Foundation\Bootstrap\RegisterProviders  ע��config��providers���������Providers�ൽ����
 *      7.Illuminate\Foundation\Bootstrap\BootProviders      ����������ע��Providers��boot����
 * ͨ��Pipeline�������󣬾����м��������·��ת�������շ�����Ӧ
 */
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();//����Ӧ��Ϣ���͵��������

$kernel->terminate($request, $response);//����̳���TerminableMiddleware�ӿڵ��м����Session��������Ӧ���������ڣ�
