<?php
namespace App\Services\Admin;

use App\Model\Industry;
use App\Model\Position;
use App\Services\CommonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PositionService extends CommonService{

    /**
     * @var int
     */
    public $page = 10;

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

    /**
     * @param $id
     * @return mixed
     */
    public function getone($id){
        return Position::where('position_id',$id)
                        ->first()
                        ->toArray();
    }

    /**
     * @param $data
     * 返回当前地区的职位、然后按照区域分组排列
     */
    public function getarea($data){
        return Position::join('industry', 'position.company_id', '=', 'industry.industry_id')
            ->get();
    }
}