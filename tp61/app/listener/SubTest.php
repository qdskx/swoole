<?php
declare (strict_types = 1);

namespace app\listener;
use think\swoole\Websocket;

class SubTest
{
    protected $websocket = null;

    public function __construct()
    {
        $this->websocket = app('\think\swoole\Websocket');
    }

    public function onConnect(){
        var_dump('subtest');
        $this->websocket->emit('send_fd' , $this->websocket->getSender());
    }

    public function onJoin($event){
        var_dump('join' , $event);
        $this->websocket->join($event['room']);
        $this->websocket->to($event['room'])->emit('joincallback' , $this->websocket->getSender() . '加入房间' . $event['room']);
    }

    public function onRoomTest($event){
        var_dump('roomtest');
        $this->websocket->to($event['room'])->emit('roomtestcallback' , $event['mess']);
    }

    public function onLeave($event){
        var_dump('leave');
        $this->websocket->to($event['room'])->emit('leavecallback' , $this->websocket->getSender() . '离开房间' . $event['room']);
    }

    public function onClose(){
        var_dump('close');
    }
}
