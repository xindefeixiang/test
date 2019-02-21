<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseApiController;
use App\Services\Admin\UserService;
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2019/2/19
 * Time: 16:42
 */
class UserController extends BaseApiController
{
    private $service;

    public function __construct(UserService $service)
    {
        //继承基类的构造方法
        parent::__construct();
        //依赖注入service
        $this->service=$service;
    }
    public function add(){
        //写一些验证规则
        //验证参数
        //controller 去service调用逻辑代码
        //封装一个

        echo 1;die;

    }
    public function save(){

    }
    public function sel(){

    }
    //没有删除的不用补全
    public function del(){

    }


}