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

    public function shwo($id)
    {
        return PortOrigin::find($id);
    }

    public function store(Request $request)
    {
        return PortOrigin::create($request->all());
    }

    public function update(Request $request,$id)
    {
        $portorigin=PortOrigin::findOrFail($id);
        $portorigin->update($request->all());

        return $portorigin;
    }

    public function delete(Request $request, $id)
    {
        $portorigin=PortOrigin::findOrFail($id);
        $portorigin->delete();
        return 204;
    }
}
