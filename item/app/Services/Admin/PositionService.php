<?php
namespace App\Services\Admin;

use App\Model\Position;
use App\Services\CommonService;
use Illuminate\Http\Request;


class PositionService extends CommonService{
    /**
     * @return array|string
     */
    public function GetList(){
        $data = Position::all()->toArray();
        if (empty($data)){
            return $this->getCode(500,1,'获取失败');
        }
        return $this->getCode(200,0,$data);
    }
}