<?php
namespace App\Http\Controllers\Enterprise;
use App\Http\Controllers\BaseApiController;
use App\Services\Enterprise\EnterpriseService;
class EnterpriseController extends BaseApiController
{
    private $service;

    public function __construct(EnterpriseService $service)
    {
        //继承基类的构造方法
        parent::__construct();
        //依赖注入service
        $this->service=$service;
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  展示热门企业数据
     */
    public function show()
    {
        $data = $this->service->show();
        print_r($data);
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  展示热门企业全部数据
     */
    public function shows()
    {
        $data = $this->service->shows();
        print_r($data);
    }

}