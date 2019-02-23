<?php
namespace App\Services\Home;
use App\Model\Recruit\Recruit;
use App\Model\Recruit\Content;
class ProgramService
{
    //写完逻辑代码 调用数据库

    public function industry(){
        $data = Recruit::get()->where('is_default',1)->toArray();
        return $data;
    }

    public function industryall($classification){
        $data = Recruit::get()->where('classification',$classification)->toArray();
        return $data;
    }

    public function detas($id){
        $data = Content::get()->where('enterprise_id',$id)->toArray();
        return $data;
    }

    public function comments(){

    }

}