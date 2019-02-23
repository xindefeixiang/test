<?php
namespace App\Http\Controllers\Signup;
use App\Http\Controllers\BaseApiController;
use App\Services\Signup\SignupService;
use Illuminate\Support\Facades\Input;

class SignupController extends BaseApiController
{
    private $service;

    public function __construct(SignupService $service)
    {
        //继承基类的构造方法
        parent::__construct();
        //依赖注入service
        $this->service=$service;
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  添加报名
     */
    public function add()
    {
        $data = Input::get();
        if($data['activity_id'] =="" and $data['manname'] =="" and $data['phone']==""){
            return "不能为空";
        }
        $data = $this->service->add($data);
        print_r($data);
    }


}