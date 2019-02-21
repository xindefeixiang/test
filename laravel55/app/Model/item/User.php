<?php

namespace App\Model\item;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function adduser($data){
        return (new self())->insert($data);
    }
}
