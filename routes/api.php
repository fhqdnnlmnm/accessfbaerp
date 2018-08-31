<?php

use Illuminate\Http\Request;
use App\Model\PortOrigin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Business\OriginPortController;
use App\Http\COntrollers\Business\DestPortController;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('port_origins','PortOriginController@index');
// 1 基础信息管理
//   1.1 起运港管理
// 1.2 目的港管理

// 1.1 起运港管理
Route::get('origin_ports',function () {
    // return DB::select('select * from origin_ports where id > ?',[1]);
    // 测试insert语句的返回值
    // $temp=DB::insert('insert into users (name,email,password) values(?,?,?)',['Dayle','1@test.com','zsk']);
    // var_dump($temp);
    // 数据库事务
    // DB::transaction(function(){
    //     DB::table('users')->where('id',4)->update(['email'=>'test@163.com']);
    // },2);
    // 数据库请求构建器
    // DB::table('users')->orderby('id')->chunk(1,function($users){
    //     echo $users;
    //     if($users[0]->id == 2){
    //         return false;
    //     };
    // });
    // 聚合
    // return DB::table('users')->sum('id');
    // 字段约束
    // return DB::table('customers')->join('contacts','customers.contact_id','=','contacts.id')
    //     ->where('contacts.id','<',5)
    //     ->select('customers.id','customers.name','contacts.id as c_id','contacts.telephone')
    //     ->get();
    // where子句
    // return get_object_vars(DB::table('users')->inRandomOrder()->first());
    // return DB::table('users')->paginate(1)->total();
    // 未找到异常
    // $temp=User::find(1);
    // return $temp->fill(['email'=>'test@gmail.com']);
    // 全局作用域
    // return User::id(0)->get();
    // 观察者
    // $temp = User::find(1);
    // return $temp->fill(['email'=>'test@163.com']);
    // $temp = User::create(['name'=>'ray','email'=>'test@111.com','password'=>'test']);
    // return $temp;
    //  模型关联
    $temp = User::find(1)->comments()->get();
   return $temp;
   
    // return get_object_vars($temp);
});
Route::get('origin_ports/{origin_port}','OriginPortController@show');
Route::post('origin_ports','OriginPortController@store');
Route::put('origin_ports/{origin_port}','OriginPortController@update');
Route::delete('origin_ports/{origin_port}','OriginPortController@delete');

// 1.2 目的港管理
Route::get('dest_ports',function () {
    return DB::select('select * from dest_ports');
});
Route::get('dest_ports/{origin_port}','DestPortController@show');
Route::post('dest_ports','DestPortController@store');
Route::put('dest_ports/{origin_port}','DestPortController@update');
Route::delete('dest_ports/{origin_port}','DestPortController@delete');





Route::get('customers',function(){
    return DB::select('select * from customers where id > ?',[1]);
});


Route::get('contacts',function(){
    return DB::select('select * from contacts where id > ?',[1]);
});

