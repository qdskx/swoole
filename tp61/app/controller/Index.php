<?php
namespace app\controller;

use app\BaseController;
use app\Request;
use think\swoole\coroutine\Context;

class Index extends BaseController
{
    public function index()
    {

//        if($this->request->get('user') == 'a'){
//            $link = 'a';
//            sleep(1);
//            return $link;
//        }else{
//            $link = 'b';
//            sleep(2);
//            return $link;
//        }

//        串行了bb
//        global $link;
//
//        if($this->request->get('user') == 'a'){
//            $link = 'a';
//            sleep(1);
//            return $link;
//        }else{
//            $link = 'b';
//            sleep(2);
//            return $link;
//        }

//        没串行a__2 b__3
        if($this->request->get('user') == 'a'){
            $link = 'a';
            sleep(1);
            Context::setData('link' , $link);
            $link = Context::getData('link');
            $cid = Context::getCoroutineId();
            Context::removeData('link');
            return $link . '__' . $cid;
        }else{
            $link = 'b';
            sleep(2);
            Context::setData('link' , $link);
            $link = Context::getData('link');
            $cid = Context::getCoroutineId();
            Context::removeData('link');
            return $link . '__' . $cid;
        }

//        $start = time();
//        sleep(5);
//        $end = time();
//
//        return getmypid() . "咋咋---- start:{$start} --- end:{$end}";

//        return 'tp61index';
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
