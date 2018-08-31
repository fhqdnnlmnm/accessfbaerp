<?php
namespace App\Observers;

use App\User;
use Illuminate\Support\Facades\Redis;

class UserObserver 
{
    public function creating(User $user)
    {
        // Redis::set('creating','ok');
        // Redis::command('rpush',['type','creating']);
        Redis::publish('creating',json_encode(['email'=>$user->email]));

    }
    public function created(User $user)
    {
        // Redis::set('created','ok');
        // // Redis::command('rpush',['type','created']);
        Redis::publish('created',json_encode(['email'=>$user->email]));
    }

    public function saving(User $user)
    {
        // Redis::set('saving','ok');
        // Redis::command('rpush',['type','saving']);
        Redis::publish('saving',json_encode(['email'=>$user->email]));
    }

    public function saved(User $user)
    {
        // Redis::set('saved','ok');
        // Redis::command('rpush',['type','saved']);
        Redis::publish('saved',json_encode(['email'=>$user->email]));
    }

}