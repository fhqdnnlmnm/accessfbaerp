<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qq extends Model
{
    //有多条操作日志
    function logs(){
        return $this->hasMany('App\Log');
    }
}
