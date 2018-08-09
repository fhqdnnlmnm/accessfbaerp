<?php

namespace App\Model\Business;

use Illuminate\Database\Eloquent\Model;

class OriginPort extends Model
{
    //
    protected $table = "origin_ports";
    
    protected $fillable=['city'];
}
