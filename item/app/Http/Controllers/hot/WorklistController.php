<?php

namespace App\Http\Controllers\hot;

use App\Http\Controllers\BaseApiController;
use App\Services\Admin\UserService;
use App\Services\Admin\WorklistService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorklistController extends BaseApiController
{
    /**
     * @var UserService
     */
    public $service;

    /**
     * WorklistController constructor.
     * @param UserService $service
     */
    public function __construct(WorklistService $service)
    {
        $this->service = $service;
    }

    /**
     * 获取行业数据列表
     * @return array|string
     */
    public function GetWork(){
        $data = $this->service->GetList();
        return $data;
    }
}
