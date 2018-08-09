<?php

namespace App\Http\Controllers;
use App\Model\Business\OriginPort;
use Illuminate\Http\Request;
use App\Http\Resources\PortOrigin as PortOriginResource;

class OriginPortController extends Controller
{
    //
    public function index()
    {
        return OriginPort::all();
    }

    public function show($id)
    {
        return OriginPort::find($id);
    }

    public function store(Request $request)
    {
        $portorigin = OriginPort::create($request->all());
        return response()->json($portorigin,201);
    }

    public function update(Request $request,OriginPort $portorigin)
    {
        $portorigin->update($request->all());
        return response()->json($portorigin,200);
    }

    public function delete(OriginPort $portorigin)
    {
        $portorigin->delete();
        return response()->json(null,204);
    }
}
