<?php
namespace app\rpc\interfaces;

interface ArticleInterface{

    public function add($title);

    public function list();

}