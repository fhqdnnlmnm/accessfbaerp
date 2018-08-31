<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Scopes\IdScope;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // 本地作用域
    public function scopeId($query,$id)
    {
        return $query->where('id','>',$id);
    }

    // 全局作用域
    protected static function boot()
    {
        parent::boot();
        // 1、全局作用域类
        // static::addGlobalScope(new IdScope);
            // 匿名全局作用域
            // static::addGlobalScope('id',function(Builder $builder){
            //     $builder->where('id','>',2);
            // });
    }

    // profile关联
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    //article关联
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    // 与roles关联
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    //与comments关联：远层一对多
    public function comments()
    {
        return $this->hasManyThrough('App\Comment','App\Article');
    }
}
