<?php
namespace app\controller\home;
use app\BaseController;
use think\facade\View;

class Index extends BaseController{

    public function index(){
        var_dump('home.index.index');
//        return view('/wstest');
        return View::fetch('/wstest');
    }
}