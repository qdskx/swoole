<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        $start = time();
        sleep(5);
        $end = time();

        return getmypid() . "---- start:{$start} --- end:{$end}";
    }

    public function hello($name = 'ThinkPHP6')
    {
        echo '5555555555';
        return 'hello,' . $name;
    }
}
