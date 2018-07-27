<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PortOrigin extends Model
{
    //
    protected $table = "port_origins";
    
    protected $fillable=['city'];
}
