<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordinates;

class MapController extends Controller
{
    public function map()
    {
        return view('front-end.map');
    }
    public function saveCoordinates(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $coordinates = new Coordinates();
        $coordinates->latitude = $request->latitude;
        $coordinates->longitude = $request->longitude;
        $coordinates->save();

        return back()->with('success', 'Coordinates saved successfully!');
    }
}

