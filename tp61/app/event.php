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
        'swoole.websocket.Connect' => [
            \app\listener\WsConnect::class
        ],
        'swoole.websocket.Close' => [
            \app\listener\WsClose::class
        ],
        'swoole.websocket.Test' => [
            \app\listener\WsTest::class
        ],
    ],

    'subscribe' => [
    ],
];
