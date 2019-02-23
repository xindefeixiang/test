<?php
namespace App\Http\Controllers\Imgs;
use App\Http\Controllers\BaseApiController;
use App\Services\Imgs\ImgsService;
class ImgsController extends BaseApiController
{
    private $service;

    public function __construct(ImgsService $service)
    {
        //继承基类的构造方法
        parent::__construct();
        //依赖注入service
        $this->service=$service;
    }

    /**
     * EnterpriseController constructor.
     * @param EnterpriseService $service
     *  展示轮播图数据
     */
    public function show()
    {
        $data = $this->service->show();
        return $data;
    }

}