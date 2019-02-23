<?php

namespace App\Http\Controllers\hot;

use App\Services\Admin\PositionService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
class PositionController extends Controller
{
    /**
     * @var PositionService
     */
    public $service;

    /**
     * WorklistController constructor.
     * @param PositionService $service
     */
    public function __construct(PositionService $service)
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

    public function positionintro(Request $request){
        $this->validate($request,[
            'id' => 'required'
        ]);
       
    }
}
