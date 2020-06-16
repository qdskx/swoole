<?php
declare (strict_types = 1);

namespace app\listener;

class RoomLeave
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event , \think\swoole\websocket $ws , \think\swoole\websocket\Room $room)
    {

        var_dump('离开' , $event);   //离开时客户端传来的参数
//        对比离开前后的客户端个数
//        var_dump($room->getClients($event['room']));
        $ws->leave($event['room']);
//        var_dump($room->getClients($event['room']));

//        回复给客户端的消息
//        $ws->emit('leavecallback' , $ws->getSender() . '成功离开房间' . $event['room']);
        $ws->to($event['room'])->emit('leavecallback' , $ws->getSender() . '离开房间' . $event['room']);



//        同时离开多个房间
//        $ws->leave(['room1' , 'room2']);
//        指定客户端离开指定房间
//        $ws->setSender(3)->leave('room');






    }

}
