<?php
namespace app\rpc\services;


use app\rpc\interfaces\ArticleInterface;


class ArticleService implements ArticleInterface
{
    public function create()
    {
        return 'create article';
    }

    public function delete(int $id)
    {
        return 'delete:' . $id;

    }
}