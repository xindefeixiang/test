<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\BaseApiController;
use App\Services\Home\ProgramService;
class ProgramController extends BaseApiController{

    private $service;

    public function __construct(ProgramService $service)
    {
        //依赖注入service
        $this->service=$service;
    }
    //企业
    public function industry(){
        $data = $this->service->industry();
        print_r($data);
    }
   //全部企业
    public function industryall(){
        $classification = '岗业';
        $data = $this->service->industryall($classification);
    }
    //公司详情
    public function details(){
        $id = '1';
        $data = $this->service->detas($id);
    }
    //评论
    public function comments(){
        $arr = $_POST;
        $data = $this->service->comments($arr);
    }

}