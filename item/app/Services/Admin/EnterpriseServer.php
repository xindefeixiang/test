<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/22
 * Time: 15:55
 */

namespace App\Services\Admin;

use App\Model\Admin\Enterprise;

class EnterpriseServer
{
    //添加入库企业信息
    public function add($data){
        return Enterprise::insertGetId($data);
    }

    //查询出来企业信息
    public function show(){
        return Enterprise::get()->toArray();
    }

    public function get_tocken(){
        $enter = new Enterprise();
        return $enter->getJWTIdentifier();
    }
}