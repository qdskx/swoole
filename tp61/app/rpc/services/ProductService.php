<?php
namespace app\rpc\services;
use app\rpc\interfaces\ProductInterface;

class ProductService implements ProductInterface
{
    public function getList()
    {
        return [1,2,3];
    }
    public function getDetail(int $id)
    {
        return 'detail:' . $id;
    }
}