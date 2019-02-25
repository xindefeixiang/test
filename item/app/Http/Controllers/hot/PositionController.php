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

    /**
     * @param Request $request
     * @return mixed
     */
    public function positionintro(Request $request){
        $this->validate($request,[
            'id' => 'required'
        ]);
        $data = $request->only('id');
        $res = $this->service->getone($data['id']);
        return $res;
    }

    /**
     * @param Request $request
     * 区域选项
     */
    public function arealist(Request $request){
        $this->validate($request,[
           'province'   =>  'string',
           'city'       =>  'string',
           'area'       =>  'string',
        ],[
            'required'  =>  '省和城市还有市区不能有空的',
            'string'  =>  '省和城市还有市区必须为字符串',
        ]);
        $data = $request->only('province','city','area');
        return $this->service->getarea($data);
    }
}
