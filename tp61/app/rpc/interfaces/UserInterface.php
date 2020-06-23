<?php
namespace app\rpc\interfaces;

interface UserInterface{

    public function money($money);

    public function getInfo($name);
}