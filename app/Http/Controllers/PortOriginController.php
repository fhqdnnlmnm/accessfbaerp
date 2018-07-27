<?php

namespace App\Http\Controllers;
use App\Model\PortOrigin;
use Illuminate\Http\Request;
use App\Http\Resources\PortOrigin as PortOriginResource;

class PortOriginController extends Controller
{
    //
    public function index()
    {
        return PortOrigin::all();
    }

    public function show($id)
    {
        return PortOrigin::find($id);
    }

    public function store(Request $request)
    {
        $portorigin = PortOrigin::create($request->all());
        return response()->json($portorigin,201);
    }

    public function update(Request $request,PortOrigin $portorigin)
    {
        $portorigin->update($request->all());
        return response()->json($portorigin,200);
    }

    public function delete(PortOrigin $portorigin)
    {
        $portorigin->delete();
        return response()->json(null,204);
    }
}
