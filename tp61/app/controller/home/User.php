<?php
declare (strict_types = 1);

namespace app\controller\home;

use think\Request;

class User
{
//    public function register(\Swoole\Server $server){
//    public function register(\think\swoole\Manager $manager){
    public function register(){

//        echo '开始邮件发送' . time() . '<br />';
//        sleep(3);
//        $server->task(\app\listener\EmailTask::class);
//        $manager->getServer()->task(\app\listener\EmailTask::class);
        app('swoole.server')->task(\app\listener\EmailTask::class);
//        echo '结束邮件发送' . time() . '<br />';

        return '注册成功<br />';
    }
}
