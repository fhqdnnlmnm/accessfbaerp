<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function contacts(){
        return $this->hasMany('App\Model\Contact');
    }
}
