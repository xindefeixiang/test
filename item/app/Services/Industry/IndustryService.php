<?php
namespace App\Services\Industry;
use App\Services\CommonService;
use Illuminate\Support\Facades\DB;
class IndustryService extends CommonService
{
    /**
     * @return mixed
     *  查询industry表热门数据
     */
    public function show()
    {
        $data=DB::table("industry")->get()->take(8)->toArray();
        return $data;
    }

    /**
     * @return mixed
     *  查询industry表热门数据
     */
    public function shows()
    {
        $data=DB::table("industry")->get()->toArray();
        return $data;
    }
}