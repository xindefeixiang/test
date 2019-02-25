<?php
namespace App\Services\Home;
use App\Model\Recruit\Recruit;
use App\Model\Recruit\Content;
use http\Env\Request;

class ProgramService
{
    //写完逻辑代码 调用数据库

    public function industry(Request $request){
        $data = Recruit::get()->where('is_default',1)->toArray();
        return $data;
    }

    public function industryall($classification){
        $data = Recruit::get()->where('classification',$classification)->toArray();
        return $data;
    }

    public function details($id){
        $data = Content::get()->where('enterprise_id',$id)->toArray();
        return $data;
    }

    public function comments($arr){
        return Content::insertGetId($arr);
    }

}