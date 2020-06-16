<?php
declare (strict_types = 1);

namespace app\listener;

class RoomJoin
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event , \think\swoole\Websocket $ws , \think\swoole\Websocket\Room $room)
    {

//        var_dump('join' , $event);  //加入时客户端传入的参数
//        var_dump($ws->getSender());

//        获取指定房间下有多少个客户端
//        $clients = $room->getClients($event['room']);
//        var_dump($clients);
//        //        当前客户端加入指定room
        $ws->join($event['room']);
//        $clients = $room->getClients($event['room']);
//        var_dump($clients);

        var_dump('join');
//        获取当前fd加入了多少个room
//        $rooms = $room->getRooms($ws->getSender());
//        var_dump($rooms);
//        $ws->join($event['room']);
//        $rooms = $room->getRooms($ws->getSender());
//        var_dump($rooms);

//        回复给客户端的消息
        $ws->emit('joincallback' , $ws->getSender() . '成功加入房间' . $event['room']);


//        指定客户端接入某个指定房间
//        $ws->setSender(3)->join($event['room']);

    }    
}
