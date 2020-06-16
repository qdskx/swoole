<?php
declare (strict_types = 1);

namespace app\listener;

class RoomTest
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event , \think\swoole\websocket $ws , \think\swoole\Websocket\Room $room)
    {
        var_dump('RoomTest' , $event);
        $ws->to($event['room'])->emit('roomtestcallback' , $event['mess']);
    }    
}
