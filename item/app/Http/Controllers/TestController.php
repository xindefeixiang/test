<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function getpage(){
        $users = DB::table('industry')->paginate(1);
        return view('test',['users'=>$users]);
    }
}
