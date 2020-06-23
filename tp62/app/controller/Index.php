<?php
namespace app\controller;

use app\BaseController;
use rpc\contract\tp61\ArticleInterface;
use rpc\contract\tp61\UserInterface;

class Index extends BaseController
{
    public function index(ArticleInterface $article)
    {

        $res = $article->add('关于病毒的文章');
        var_dump($res);

        return 'tp62index';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
