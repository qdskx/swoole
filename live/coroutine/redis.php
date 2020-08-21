<?php
/**
 * 协程redis服务器
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/22
 * Time: 16:24
 */

//记得关闭防火墙!!!!!!!!!!!!!!

$http = new Swoole\Http\Server('0.0.0.0' , 8001);
$http->on('request' , function($request , $response){

//    协程redis服务只能作为回调被使用
//    例如onrequest onconnect

    $redis = new Swoole\Coroutine\Redis();
    $redis->connect('127.0.0.1' , 6379);
    $val = $redis->get($request->get['a']);
    $response->write($val);   //使用 write 分段发送数据后，end 方法将不接受任何参数，调用 end 只是会发送一个长度为 0 的 Chunk 表示数据传输完毕 将不会再输出dddd
    $response->write('ffffffff');

    $response->end('dddddddd'); //只能调用一次,需要多次向客户端发送消息,可使用write

    // 接入接下来继续处理mysql,那么http server onrequest的时间是redis和mysql的max值,而不是二者之和
});

$http->start();