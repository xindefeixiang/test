<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/22
 * Time: 19:05
 */

namespace App\Services\Admin;

use App\Model\Admin\Position;
class PositionServer
{
    //添加职位
    public function position_add($data){
        return Position::insertGetId($data);
    }

    //展示该公司下面的职位
    public function position_show($id){
        return Position::where('company_id',$id)->get()->toArray();
    }

    //删除职位
    public function position_del($id){
        return Position::where('company_id',$id)->delete();
    }

    //重命名
    public function position_rename($id,$up_array){
        return Position::where('position_id',$id)->update($up_array);
    }
}