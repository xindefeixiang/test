<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/21
 * Time: 18:59
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\ResumeServer;
use Illuminate\Support\Facades\Validator;
class ResumeController extends Controller
{
    //定义一个受保护的全局变量
    protected $rs;
    //将server给赋值过来
     public function __construct(ResumeServer $resumeServer)
     {
         return $this->rs = $resumeServer;
     }

     //将简历的值接过来传到server层
     public function resume_add(Request $request){
         $data = $request->all();
         print_r($data);
     }


     //将简历表的东西给查出来
    public function resume_show(){
         $res = $this->rs->resume_show();
         return $res;
    }

    //批量删除简历
    public function resume_more_del(Request $request){
         $id = $request->get('resume_id');
         if(empty($id)||!is_int($id)||$id!=0){
             return ['status' => 'fail','code' => 401,'error' => '获取id失败'];
         }
         $res = $this->rs->resume_more_del($id);
         if($res){
             return ['status' => 'success','code' => 200,'message' => '删除成功'];
         }else{
             return ['status' => 'fail','code' => 500,'error' => '删除失败'];
         }
    }

    //面试邀请字段的规则
    public function invit_rules(){
         return [
             'offer_way'=>'required|integer|max:10',
             'offer_place'=>'required|max:100',
             'offer_time'=>'required|date_format:Y-m-d H:i:s',
             'offer_tel'=>'required|max:10',
             'offer_contact'=>'required|max:100',
             'user_id'=>'required|integer|max:10'
         ];
    }

    //面试邀请  先做一下单个邀请
    public function interview_invit(Request $request){
         $validator = Validator::make($request->post(),$this->invit_rules());
         if($validator->fails()){
             return $validator->errors()->all();
         }else{
             $data = $request->post();
             $res = $this->rs->interview_add($data);
             if($res){
                 return ['status' => 'success','code' => 200,'message' => '面试邀约成功'];
             }else{
                 return ['status' => 'fail','code' => 500,'message' => '面试邀约失败'];
             }
         }
    }


}