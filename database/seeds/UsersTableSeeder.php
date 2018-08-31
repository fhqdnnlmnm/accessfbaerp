<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('articles')->truncate();
        DB::table('profiles')->truncate();
        DB::table('comments')->truncate();
     
        factory(App\User::class,4)->create()
        ->each(function ($u){
            $u->profile()->save(factory(App\Profile::class)->make());
        })->each(function($u){
            $u->articles()->save(factory(App\Article::class)->make())->each(function($a){
                $a->comments()->save(factory(App\Comment::class)->make());
            });
        });
    }
}
