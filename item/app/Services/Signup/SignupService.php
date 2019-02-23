<?php
namespace App\Services\Signup;
use App\Services\CommonService;
use Illuminate\Support\Facades\DB;
class SignupService extends CommonService
{
    /**
     * @return mixed
     *  添加报名表signup数据
     */
    public function add($data)
    {
        $res = DB::table("signup")->insert($data);
        if($res){
            return "添加成功";
        }else{
            return "添加失败";
        }
    }
}