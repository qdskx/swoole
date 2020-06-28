<?php
namespace app\rpc\interfaces;

interface ArticleInterface
{

    public function create();

    public function delete(int $id);
}