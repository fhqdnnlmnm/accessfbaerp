<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //article关联
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
