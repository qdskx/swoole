<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/13
 * Time: 16:39
 */

//记得关闭防火墙!!!!!!!!!!!!!!

$http = new Swoole\Http\Server('0.0.0.0' , 9509);

$http->set([
//    'document_root' => "/swoole/live/data",   //不管用
//    'enable_static_handler' => true,

//    "static_handler_locations" => ['/swoole/live/data'],
]);

$http->on('request', function ($request, $response) {

    if ($request->server['path_info'] == '/favicon.ico' || $request->server['request_uri'] == '/favicon.ico') {
//        不管用
//        array(10) {
//            ["request_method"]=>
//              string(3) "GET"
//              ["request_uri"]=>
//              string(12) "/favicon.ico"
//              ["path_info"]=>
//              string(12) "/favicon.ico"
//              ["request_time"]=>
//              int(1595471689)
//              ["request_time_float"]=>
//              float(1595471689.6549)
//              ["server_protocol"]=>
//              string(8) "HTTP/1.1"
//              ["server_port"]=>
//              int(9509)
//              ["remote_port"]=>
//              int(57155)
//              ["remote_addr"]=>
//              string(12) "192.168.1.87"
//              ["master_time"]=>
//              int(1595471688)
//            }



        $response->end();
        return;
    }
//    var_dump($request->get);
//    var_dump($request->post);
    $response->header("Content-Typet", "text/html; charset=utf-8");
//    $response->cookie('xuanxuan' , '56' , time() + 3600);
    $response->end("<h1>Hello Swoole ggggggggg</h1>");
//    $response->end(json_encode($request->get)); //end传入的参数必须是字符串
});

$http->start();

