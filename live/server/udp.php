<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/13
 * Time: 15:34
 */
$server = new swoole_server('127.0.0.1' , 9502 , SWOOLE_PROCESS,  SWOOLE_SOCK_UDP );

$server->set([
    'worker_num' => 2
]);

//[root@bogon ~]# ps aft | grep udp.php
//  1779 pts/2    S+     0:00  \_ grep --color=auto udp.php
//  1766 pts/0    Sl+    0:00  \_ php udp.php
//  1767 pts/0    S+     0:00      \_ php udp.php
//  1769 pts/0    S+     0:00          \_ php udp.php
//  1770 pts/0    S+     0:00          \_ php udp.php
//


$server->on('Packet' , function ($server , $data , $clientInfo){
    $server->sendto($clientInfo['address'] , $clientInfo['port'] ,  $data);

    var_dump($clientInfo);

//    array(4) {
//        ["server_socket"]=>
//          int(3)
//          ["server_port"]=>
//          int(9502)
//          ["address"]=>
//          string(9) "127.0.0.1"
//          ["port"]=>
//          int(58935)
//        }


});

$server->start();