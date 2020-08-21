<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/19
 * Time: 17:04
 */


$http = new Swoole\Http\Server('0.0.0.0' , 8882);

$http->set([
    'enable_static_handler' => true,
    'document_root' => "/swoole/live/project",   //不管用
]);


$http->on('request', function ($request, $response) {
    $response->end("<h1>Hello Swoole kkkkkkkkkkkkkk</h1>");
});


$http->start();