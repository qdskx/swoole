<?php
declare (strict_types = 1);

namespace app\listener;

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
//        var_dump($event);
//        var_dump($ws->getsender());
        $ws->emit('send_fd' , $ws->getSender());

    }    
}
