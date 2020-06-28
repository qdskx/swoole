<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{

    public function index(\rpc\contract\tp61\ArticleInterface $article, \rpc\contract\tp61\ProductInterface $product)
    {
        echo $article->create() . '<br>';
        echo $article->delete(5) . '<br>';
        echo $product->getDetail(10) . '<br>';
        var_dump($product->getList());
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
