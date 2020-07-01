<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/29
 * Time: 11:35
 */

Co::set(['hook_flags'=> SWOOLE_HOOK_ALL]);
go(function (){
echo '1' . time() . PHP_EOL;
sleep(1);
echo '2' . time() . PHP_EOL;
});

Co::create(function (){
    echo '3' . time() . PHP_EOL;
    sleep(2);
    echo '4' . time() . PHP_EOL;
});





//
//
//go(function (){
//    echo '1' . time() . PHP_EOL;
//    CO::sleep(1);
//    echo '2' . time() . PHP_EOL;
//});
//
//Co::create(function (){
//    echo '3' . time() . PHP_EOL;
//    Co::sleep(2);
//    echo '4' . time() . PHP_EOL;
//});