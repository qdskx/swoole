<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/21
 * Time: 17:04
 */

//$process = new Swoole\Process(function(){
//var_dump('process');
//} , true);
//
//$pid = $process->start();
//var_dump($pid);


$process = new Swoole\Process('callback_func' , false);

function callback_func($worker){
//    开启一个子进程 http服务,访问一静态文件
    $worker->exec('/usr/local/php/bin/php' , ['/swoole/live/server/http.php']);
}

echo "pid\n";
echo getmypid();
$pid = $process->start();
var_dump($pid);

$process->wait();


$process = new Swoole\Process(function(){

//    毫秒定时器
//    每一秒输出1
    swoole_timer_tick(1000 , function(){
        echo "11111\n";
    });

} , false);

$process->start();
$process->wait();