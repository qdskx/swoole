<?php
namespace app\controller\home;
use app\BaseController;
use think\facade\View;

class Index extends BaseController{

    public function index_start(){
        var_dump('home.index.index');
//        return view('/wstest');
        return View::fetch('/wstest');
    }

    public function index_middle(){
        return View::fetch('/index');
    }

    public function index_danmu(){
        return View::fetch('/roomDanmu');
    }

    public function index(){
        return View::fetch('/ioroom');
    }
}