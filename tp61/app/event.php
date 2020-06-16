<?php
// 事件定义文件
return [
    'bind'      => [
    ],

    'listen'    => [
        'AppInit'  => [],
        'HttpRun'  => [],
        'HttpEnd'  => [],
        'LogLevel' => [],
        'LogWrite' => [],
        'swoole.websocket.Connect' => [     //注意注意,这的Connnect首字母必须必须大写！！！！！！
            \app\listener\WsConnect::class
        ],
        'swoole.websocket.Close' => [
            \app\listener\WsClose::class
        ],
        'swoole.websocket.Test' => [
            \app\listener\WsTest::class
        ],
        'swoole.websocket.Join' => [
            \app\listener\RoomJoin::class
        ],
        'swoole.websocket.Leave' => [
            \app\listener\RoomLeave::class
        ],
        'swoole.websocket.RoomTest' => [
            \app\listener\RoomTest::class
        ],

    ],

    'subscribe' => [
    ],
];
