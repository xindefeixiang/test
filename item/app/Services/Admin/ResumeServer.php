<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/21
 * Time: 19:00
 */

namespace App\Services\Admin;
//引入Resume
use App\Model\Admin\Resume;
//引入Interview
use App\Model\Admin\Interview;
class ResumeServer
{

    //查询简历
    public function resume_show(){
        $data = Resume::get()->toArray();
        return $data;
    }

    //简历批量删除
    public function resume_more_del($id){
        $id = explode(',',$id);
        return Resume::whereIn('resume_id',$id)->delete();
    }

    //面试邀约
    public function interview_add($data){
        return Interview::insertGetId($data);
    }
}