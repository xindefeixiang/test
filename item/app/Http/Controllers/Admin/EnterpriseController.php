<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2019/2/22
 * Time: 15:07
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\EnterpriseServer;
use Illuminate\Support\Facades\Validator;

use Laravel\Passport\Client;
use Tymon\JWTAuth\Facades\JWTAuth;
class EnterpriseController extends  Controller
{
    public $server;

    public function __construct(EnterpriseServer $enterpriseServer)
    {
        $this->server = $enterpriseServer;
    }

    //增加企业信息的规则
    public function rules(){
        return [
            'pictrue' => 'required|max:80',
            'name' => 'required|max:50',
            'is_default'=>'required|integer|max:10',
            'label'=>'required',
            'browse'=>'required|max:20',
            'classification'=>'required|max:20'
        ];
    }

    //增加企业信息
    public function enterprise_add(Request $request){
        //接值
        $data = $request->all();
        //验证所接的数据规则
        $validator = Validator::make($data,$this->rules());
        //如果规则不对应的话，返回错误信息
        if($validator->fails()){
            return $validator->errors()->all();
        }
        //调用server里面添加的方法
        $res = $this->server->add($data);
        if($res){
            return  ['status' => 'success','code' => 200,'message' => '提交成功'];
        }else{
            return ['status' => 'fail','code' => 500,'message' => '提交失败'];
        }
    }

    //查询企业信息
    public function enterprise_show(){
        return $this->server->show();
    }

    //返回tocken
    public function get_tocken(){
//        return $this->server->get_tocken();
    }


    public function register(Request $request)
    {
        $newUser = [
            'user_email' => $request->get('email'),
            'user_name' => $request->get('name'),
            'password' => bcrypt($request->get('password'))
        ];
        $user = Client::create($newUser);
        $token = JWTAuth::fromUser($user);
        return $token;
    }

}