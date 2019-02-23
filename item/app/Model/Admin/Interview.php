<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/22
 * Time: 14:27
 */

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
class Interview extends Model
{
    //定义表名
    public $table = 'offer';
    //在模型类中设置$timestamps属性为false：
    public $timestamps = false;
}