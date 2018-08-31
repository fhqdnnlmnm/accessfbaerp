<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //user关联
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //comment关联
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
