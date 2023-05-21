<?php

namespace App\Http\Controllers;

use App\Models\Geo;

class GeoController extends Controller
{
    // get all regions data
    public function index()
    {
        $regions = Geo::all();
        return response()->json($regions);
    }

    // get data of a specified province
    public function show(string $province)
    {
        $districts = Geo::where("province", $province)->get();
        return response()->json($districts);
    }
}
