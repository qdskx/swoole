<?php
namespace app\rpc\interfaces;

interface ProductInterface
{
    public function getList();
    public function getDetail(int $id);
}