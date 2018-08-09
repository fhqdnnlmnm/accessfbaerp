<?php

namespace App\Model\Customer;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    public function customer(){
        return $this->belongsTo('App\Model\Customer\Customer');
    }
}
