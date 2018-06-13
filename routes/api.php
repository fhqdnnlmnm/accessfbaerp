<?php

use Illuminate\Http\Request;
use App\Model\PortOrigin;
use App\Http\Controllers\PortOriginController;
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

Route::get('port_origins','PortOriginController@index');
Route::get('port_origins/{port_origin}','PortOriginController@show');
Route::post('port_origins','PortOriginController@store');
Route::put('port_origins/{port_origin}','PortOriginController@update');
Route::delete('port_origins/{port_origin}','PortOriginController@delete');