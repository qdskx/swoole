<?php
namespace app\rpc\services;
use app\rpc\interfaces\ArticleInterface;

class ArticleService implements ArticleInterface
{
    public function add($title){
        return '发布' . $title;
    }

    public function list(){

    }
}