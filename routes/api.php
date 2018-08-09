<?php

use Illuminate\Http\Request;
use App\Model\PortOrigin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Business\OriginPortController;
use App\Http\COntrollers\Business\DestPortController;
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
    return DB::select('select * from origin_ports where id > ?',[1]);
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

