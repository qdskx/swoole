<?php
declare (strict_types = 1);

namespace app\listener;
//use app\controller\util\RedisUtil;

class WsClose
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event , \think\swoole\Websocket $ws)
    {
        var_dump('close');

        var_dump($event);//空的
//        RedisUtil::hdelRedis();
    }    
}
