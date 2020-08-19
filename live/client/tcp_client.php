<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/13
 * Time: 14:57
 */
$tcp_client = new swoole_client(SWOOLE_SOCK_TCP);

if(!$tcp_client->connect('127.0.0.1' , 9501)){
    exit('链接失败');
}

fwrite(STDOUT , 'you can click : ');
//获取输入
$msg = trim(fgets(STDIN));

//发送消息给tcp server
$tcp_client->send($msg);

//接收服务端发送的数据
$res =  $tcp_client->recv();
echo $res;