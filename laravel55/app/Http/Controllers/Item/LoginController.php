<?php

namespace App\Http\Controllers\Item;

use App\Model\item\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function getopenid(Request $request){
        $url = "https://api.weixin.qq.com/sns/jscode2session?appid=wxa41af3d86ef0c786&secret=30a406bd5e770873091480d960f72d14&js_code={$request->code}&grant_type=authorization_code";
        $res = file_get_contents($url);
        return $res;
    }
    public function login(Request $request){
        $data = $request->only('mobile','nick_name','password','avatar','sex','open_id','province','city','union_id');
        if ($data['province'] == ''){
            $data['province'] = '未知';
        }
        if ($data['city'] == ''){
            $data['city'] = '未知';
        }
        $model = new User();
        $res = $model->adduser($data);
        if (!$res){
            return [
                'code' => 500
            ];
        }
        return [
            'code'=>200,
        ];
    }
}
