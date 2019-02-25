<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\BaseApiController;
use App\Services\Home\ProgramService;
use http\Env\Request;

class ProgramController extends BaseApiController{

    private $service;

    public function __construct(ProgramService $service)
    {
        //依赖注入service
        $this->service=$service;
    }

    //热门企业
    public function industry(){
        $data = $this->service->industry();
        print_r($data);
    }

   //全部企业
    public function industryall(Request $request){
        $classification = (string)$request->get('name');
        if(!is_string($classification) || empty($classification) || $classification==0){
       return ['status'=>'fail','code'=>401,'error'=>'classication的类型不正确'];
        }
        $data = $this->service->industryall($classification);
        return $data;
    }

    //公司详情
    public function details(Request $request){
        $id = (int)$request->get('id');
        if(!is_int($id) || empty($id) || $id==0){
            return ['status'=>'fail','code'=>401,'error'=>'id类型不正确'];
        }
        $data = $this->service->details($id);
        return $data;
    }

    //评论
    public function comments(Request $request){
        $arr = $request->post();
        if(empty($arr)){
            return ['status'=>'fail','code'=>401,'error'=>'数据为空'];
        }else{
           $res = $this->service->comments($arr);
           if($res){
              return ['status'=>'fail','code'=>200,'message'=>'评论添加成功'];
           }else{
               return ['status' => 'fail','code' => 500,'message' => '评论添加失败'];

           }
        }
    }

}