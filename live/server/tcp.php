<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/13
 * Time: 11:34
 */

$server = new swoole_server('127.0.0.1' , 9501);

$server->set([
    'worker_num' => 3,  //关于此处可以通过ps aft | grep tcp.php来验证
    'max_request' => 100
]);

$server->on('connect' , function ($server , $fd , $reactor_id){
    echo "Client {$fd} - {$reactor_id} - connect \n";
});

$server->on('receive' , function ($server , $fd , $reactor_id , $data){
    $server->send($fd , "send {$fd} - {$reactor_id} - {$data} - receive \n");
});

$server->on('close' , function ($server , $fd){
    echo "tcp is close.\n";
});

$server->start();