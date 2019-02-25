<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/22
 * Time: 18:53
 */

namespace App\Model\Admin;


use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Enterprise extends Model
{

    //定义表名
    public $table='enterprise';
    //在模型类中设置$timestamps属性为false：
    public $timestamps = false;


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}