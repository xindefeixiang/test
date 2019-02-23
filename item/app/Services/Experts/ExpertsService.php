<?php
namespace App\Services\Experts;
use App\Services\CommonService;
use Illuminate\Support\Facades\DB;
class ExpertsService extends CommonService
{
    /**
     * @return mixed
     *  查询专家讲堂experts表数据
     */
    public function show()
    {
        $data=DB::table("experts")->get()->toArray();
        return $data;
    }

    public function find($data)
    {
        $data = DB::table('experts')->where('url','like',$data)
            ->orwhere('name','like',$data)
            ->orwhere('card','like',$data)
            ->get()->toArray();
        return $data;
    }

}