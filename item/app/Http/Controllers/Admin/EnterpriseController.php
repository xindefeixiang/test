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
class EnterpriseController extends  Controller
{
    public $server;

    public function __construct(EnterpriseServer $enterpriseServer)
    {
        $this->server = $enterpriseServer;
    }

    //增加企业信息
    public function enterprise_add(Request $request){
        $data = $request->all();
        if(empty($data)){
            return ['status' => 'fail','code' => 401,'error' => '数据为空'];
        }
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


}