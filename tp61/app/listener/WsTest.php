<?php
declare (strict_types = 1);

namespace app\listener;

class WsTest
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handleDe($event)
    {
        var_dump('test');
        var_dump($event);

        $ws = app('think\swoole\Websocket');
        var_dump(get_class($ws));
//        得到对象的所有方法
//        var_dump(get_class_methods($ws));
        var_dump($ws->getSender());
        //
//        $ws->to(intval($event['to']))->emit('testcallback' , $event['mess']);
        //模拟别人给某人发消息
//        $ws->setSender(4)->to(5)->emit('testcallback' , $event['mess']);
//        发送消息为数组
        $ws->to(intval($event['to']))->emit('testcallback' , [
            'from' => [
                'id' => 45,
                'fd' => $ws->getSender(),
                'nickname' => '来自哪'
            ],
            'to' => [
                'id' => 56,
                'fd' => $event['to'],
                'nickname' => '给谁发送',
            ],
            'mess' => [
                'id' => '数据库查询的id',
                'create_time' => 20200612,
                'content' => $event['mess'],
            ]
        ]);
//            群发但是自己收不到
//        $ws->broadcast()->emit('testcallback' , '好累');
//        $ws->to($ws->getSender())->emit('testcallback' , '好累');

//        $ws->emit('testcallback' , '自己发给自己');

//        var_dump(get_class(app('think\swoole\Manager')->getServer()));
    }

    public function handle($event , \think\swoole\Websocket $ws){
        $ws->to($event['to'])->emit('testcallback' , $event['mess']);
    }
}
