<?php
namespace App\Services\Imgs;
use App\Services\CommonService;
use Illuminate\Support\Facades\DB;
class ImgsService extends CommonService
{
    /**
     * @return mixed
     *  查询轮播图imgs表热门数据
     */
    public function show()
    {
        $data=DB::table("imgs")->get()->take(3)->toArray();
        return $data;
    }
}