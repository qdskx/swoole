<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/19
 * Time: 16:01
 */

$http = new Swoole\Http\Server('0.0.0.0' , 9510);

$http->set([
    'enable_static_handler' => true,
//    'document_root' => "/swoole/live/data",   //不管用
    'document_root' => "/home/data",   //不管用


//    "static_handler_locations" => ['/swoole/live/data'],
]);


$http->on('request', function ($request, $response) {
    $response->end("<h1>Hello Swoole kkkkkkkkkkkkkk</h1>");
});


$http->start();