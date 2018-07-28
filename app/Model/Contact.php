<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    public function customer(){
        return $this->belongsTo('App\Model\Customer');
    }
}
