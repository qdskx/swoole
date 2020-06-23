<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/22
 * Time: 17:04
 */
namespace app\controller\danmu;

use app\BaseController;
use think\facade\View;

class Index extends BaseController{
    public function index(){
        return View::fetch('list');
    }
}