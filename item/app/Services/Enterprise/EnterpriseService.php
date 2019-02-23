<?php
namespace App\Services\Enterprise;
use App\Services\CommonService;
use Illuminate\Support\Facades\DB;
class EnterpriseService extends CommonService
{
    /**
     * @return mixed
     *  查询enterprise表热门数据
     */
    public function show()
    {
        $data=DB::table("enterprise")->get()->toArray()->take(6);
        return $data;
    }

    /**
     * @return mixed
     *  查询enterprise表热门全部数据
     */
    public function shows()
    {
        $data=DB::table("enterprise")->get()->toArray();
        return $data;
    }
}