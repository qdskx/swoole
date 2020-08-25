<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/21
 * Time: 17:44
 */

//持续触发，直到调用 Timer::clear 清除
//$id = swoole_timer_tick(1000 , function($timer_id){
//    echo $timer_id . "\n";
//    echo "2222\n";
//});
//
//var_dump($id);
//
//swoole_timer_clear($id);

//在指定的时间后执行函数 一次性定时器，执行完成后就会销毁
//swoole_timer_after(2000, function(){
//   var_dump('yes');
//});


$timer_list = swoole_timer_list();
var_dump($timer_list);