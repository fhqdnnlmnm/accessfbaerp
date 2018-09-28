<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //一条日志对应一个qq
    function qq(){
        return $this->belongsTo('App\Qq');
    }
}
