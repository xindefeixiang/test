<?php
namespace App\Services\Activity;
use App\Services\CommonService;
use Illuminate\Support\Facades\DB;
class ActivityService extends CommonService
{
    /**
     * @return mixed
     *  查询平台活动activity表数据
     */
    public function show()
    {
        $data=DB::table("activity")->get()->toArray();
        return $data;
    }

}