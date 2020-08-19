<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/13
 * Time: 15:40
 */
$udp_client = new swoole_client(SWOOLE_SOCK_UDP);

if(!$udp_client->connect('127.0.0.1' , 9502)){
    exit('udp链接失败');
}


fwrite(STDOUT , 'yes you can click : ');
$msg = trim(fgets(STDIN));

$udp_client->send($msg);

$res = $udp_client->recv();

echo 'udp res : ';
echo $res;
