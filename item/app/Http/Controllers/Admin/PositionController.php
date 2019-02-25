<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/22
 * Time: 19:04
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Admin\PositionServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PositionController extends Controller
{
    //定义一个全局变量
     public $position;
     //定义一个构造函数，给全局变量一个值
     public function __construct(PositionServer $positionServer)
     {
         $this->position = $positionServer;
     }

     //职位字段的规则
    public function rules(){
        return [
            'job_name' => 'required|max:191',
            'nature'=>'required|integer|max:10',
            'address' => 'required|max:191',
            'min'=>'required|max:191',
            'max'=>'required|max:191',
            'require'=>'required|integer|max:10',
            'work_life'=>'required|integer|max:10',
            'job_category'=>'required|max:191',
            'industry_id'=>'required|integer|max:10',
            'recruits_num'=>'required|max:191',
            'description'=>'required|mimetypes:text',
            'company_id'=>'required|integer|max:10',
        ];
    }

     //添加职位
    public function position_add(Request $request){
         $data = $request->post();
         $validator = Validator::make($data,$this->rules());

         if($validator->fails()){
             return $validator->errors()->all();
         }else{
             $res = $this->position->position_add($data);
             if($res){
                 return ['status' => 'success','code' => 200,'message' => '职位添加成功'];
             }else{
                 return ['status' => 'fail','code' => 500,'message' => '职位添加失败'];
             }
         }
    }

    //查询出当前公司发布的职位信息
    public function position_show(Request $request){
         $id =(int)$request->get('company_id');
         if(!is_int($id)||empty($id)||$id==0){
             return ['status' => 'fail','code' => 401,'error' => 'id类型不正确'];
         }
         $res = $this->position->position_show($id);
         return $res;
    }

    //删除发布的职位
    public function position_del(Request $request){
        $id =(int)$request->get('position_id');
        if(!is_int($id)||empty($id)||$id==0){
            return ['status' => 'fail','code' => 401,'error' => 'id类型不正确'];
        }else{
            $res = $this->position->position_del($id);
            if($res){
                return ['status' => 'success','code' => 200,'message' => '职位删除成功'];
            }else{
                return ['status' => 'fail','code' => 500,'message' => '职位删除失败'];
            }
        }
    }

    //重命名
    public function position_rename(Request $request){
         $id = (int)$request->get('position_id');
         $up_array = [
             'job_name'=>$request->get('job_name')
         ];
        if(!is_int($id)||empty($id)||$id==0||empty($up_array)){
            return ['status' => 'fail','code' => 401,'error' => '数据不正确'];
        }else{
            $res = $this->position->position_rename($id,$up_array);
            if($res){
                return ['status' => 'success','code' => 200,'message' => '重命名成功'];
            }else{
                return ['status' => 'fail','code' => 500,'message' => '重命名失败'];
            }
        }
    }

}