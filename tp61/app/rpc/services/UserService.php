<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/23
 * Time: 14:39
 */

namespace app\rpc\services;

use app\rpc\interfaces\UserInterface;

class UserService implements UserInterface
{
    public function money($money){
        return 100 + $money;
    }

    public function getInfo($name){
        return $name;
    }
}