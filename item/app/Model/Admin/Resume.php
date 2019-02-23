<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/21
 * Time: 19:30
 */

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
class Resume extends Model
{
    //定义表名
    public $table = 'resume';
    //在模型类中设置$timestamps属性为false：
    public $timestamps = false;

}