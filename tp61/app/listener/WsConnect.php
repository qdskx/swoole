<?php
declare (strict_types = 1);

namespace app\listener;
use app\controller\util\RedisUtil;

class WsConnect
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event , \think\swoole\Websocket $ws)
    {
        var_dump('connect');


        $uid = $event->get('id');
        RedisUtil::hsetRedis('0' , 'uidFd' , $uid , $ws->getSender());
//        var_dump($event);
//        var_dump($ws->getsender());
        $ws->emit('send_fd' , $ws->getSender());


    }    
}
