<?php

namespace App\Http\Controllers;

use App\Server\CommonController;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public $server;
    //
    public function __construct(CommonController $server)
    {
        $this->server = $server;
    }
}
