<?php
namespace App\Services\Admin;

use App\Model\Industry;
use App\Services\CommonService;
class WorklistService extends CommonService{
    /**
     * @return array|string
     */
    public function GetList(){
        $data = Industry::all()->toArray();
        if (empty($data)){
            return $this->getCode(500,1,'获取失败');
        }
        return $this->getCode(200,0,$data);
    }
}