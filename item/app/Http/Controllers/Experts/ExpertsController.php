<?php
namespace App\Http\Controllers\Experts;
use App\Http\Controllers\BaseApiController;
use App\Services\Experts\ExpertsService;
use Illuminate\Support\Facades\Input;

class ExpertsController extends BaseApiController
{
    private $service;

    public function __construct(ExpertsService $service)
    {
        //继承基类的构造方法
        parent::__construct();
        //依赖注入service
        $this->service=$service;
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  展示专家讲堂数据
     */
    public function show()
    {
        $data = $this->service->show();
        return $data;
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  搜索专家讲堂数据
     */
    public function find()
    {
        $data = Input::get();
        if(empty($data)){
            return "搜索内容不能为空";
        }
        $data = $this->service->find($data);
        return $data;
    }
}