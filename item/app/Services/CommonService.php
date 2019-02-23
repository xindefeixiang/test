<?php

namespace App\Services;


//基础service  一些公共的方法的基类
class CommonService
{
    //算法
    public function getCode($code,$type,$data){
        $res = '';
        switch ($type){
            case 0:$res = $this->success($code,$data);break;
            case 1:$res = $this->error($code,$data);break;
        }
        return $res;
    }
    public function success($code,$data){
        return [
            'code' => $code,
            'data' => $data
        ];
    }
    public function error($code,$data){
        return [
            'code' => $code,
            'error' => $data
        ];
    }
}