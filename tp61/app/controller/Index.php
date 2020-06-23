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
}
