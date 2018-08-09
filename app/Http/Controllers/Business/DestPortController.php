<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;

class DestPortController extends Controller
{
    //获取所有的港口
    public function index()
    {
        return OriginPort::all();
    }
    // 获取指定港口
    public function show($id)
    {
        return OriginPort::find($id);
    }
    //添加港口
    public function store(Request $request)
    {
        $portorigin = OriginPort::create($request->all());
        return response()->json($portorigin,201);
    }
    // 更新港口
    public function update(Request $request,OriginPort $portorigin)
    {
        $portorigin->update($request->all());
        return response()->json($portorigin,200);
    }
    // 删除港口
    public function delete(OriginPort $portorigin)
    {
        $portorigin->delete();
        return response()->json(null,204);
    }
}
