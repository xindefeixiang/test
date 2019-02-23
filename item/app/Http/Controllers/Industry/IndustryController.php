<?php
namespace App\Http\Controllers\Industry;
use App\Http\Controllers\BaseApiController;
use App\Services\Industry\IndustryService;
class IndustryController extends BaseApiController
{
    private $service;

    public function __construct(IndustryService $service)
    {
        //继承基类的构造方法
        parent::__construct();
        //依赖注入service
        $this->service=$service;
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  展示热门行业数据
     */
    public function show()
    {
        $data = $this->service->show();
        print_r($data);
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  展示热门行业全部数据
     */
    public function shows()
    {
        $data = $this->service->shows();
        print_r($data);
    }

}