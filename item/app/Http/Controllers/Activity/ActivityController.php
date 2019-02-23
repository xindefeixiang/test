<?php
namespace App\Http\Controllers\Activity;
use App\Http\Controllers\BaseApiController;
use App\Services\Activity\ActivityService;
class ActivityController extends BaseApiController
{
    private $service;

    public function __construct(ActivityService $service)
    {
        //继承基类的构造方法
        parent::__construct();
        //依赖注入service
        $this->service=$service;
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  展示平台活动数据
     */
    public function show()
    {
        $data = $this->service->show();
        return $data;
    }
}