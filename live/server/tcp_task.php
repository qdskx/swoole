<?php
/**
 * TCP TASK异步处理
 * ABCD必不可少
 */

$server = new swoole_server('127.0.0.1' , 8883);

$server->set([
    'worker_num' => 3,  //关于此处可以通过ps aft | grep tcp.php来验证
    'max_request' => 100,
//A！！！！！
    'task_worker_num' => 3
]);

$server->on('connect' , function ($server , $fd , $reactor_id){
    echo "Client {$fd} - {$reactor_id} - connect \n";

//B！！！！！
    $server->task($fd . '___' . $reactor_id);
});

$server->on('receive' , function ($server , $fd , $reactor_id , $data){
    $server->send($fd , "send {$fd} - {$reactor_id} - {$data} - receive \n");
});

//C！！！！！
$server->on('task' , function($server , $task_id , $work_id , $data){
    var_dump('task_id' , $task_id);
    var_dump('task $work_id' , $work_id);
    var_dump('task $data' , $data);

    sleep(3);
    return 'task 3 秒结束了';
});

//D！！！！！
$server->on('finish' , function($server , $task_id , $data){
    var_dump('finish task_id' , $task_id);
    var_dump('finish data' , $data);
});

$server->on('close' , function ($server , $fd){
    echo "tcp is close. {$fd}\n";
});

$server->start();