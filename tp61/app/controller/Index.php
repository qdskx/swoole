<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
//        $start = time();
//        sleep(5);
//        $end = time();
//
//        return getmypid() . "咋咋---- start:{$start} --- end:{$end}";

        return 'tp61index';
    }

    public function hello($name = 'ThinkPHP6')
    {
        echo '111111';
        return 'hello,' . $name;
    }


    public function tableTest(){

        var_dump(app('think\swoole\Table'));

        echo '<br />';
        echo '<br />';
        echo '<br />';

        $userTable = app('swoole.table.user');

        $xuanxuan = $userTable->get('xuanxuan');
        $userTable->set('one' , [
            'id' => 34,
            'name' => 'sd',
            'pwd' => 23
        ]);

        $xx = $userTable->get('one');

        var_dump($xuanxuan);
        var_dump($xx);
        echo "<pre>";print_r($xx);echo "<pre>";
        echo "<pre>";var_dump($xx);echo "<pre>";

        $allTable = app('think\swoole\Table');
        $allTable->order->set(
            'two' , [
                'id' => 1,
                'uid' => 2
            ]
        );


        var_dump($allTable->order->get('two'));
    }


}
