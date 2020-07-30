<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    // distance calculator
    public function getDistance(Request $request)
    {
        $lat1 = 19.820664;
        $lat2 = 20.709722;
        $lon1 = -155.468066;
        $lon2 = -156.253333;
        $unit = 'k';
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K")
        {
            return response()->json([$miles * 1.609344]);
        }
        else if ($unit == "N")
        {
            return response()->json([$miles * 0.8684]);
        }
        else
        {
            return response()->json([$miles]);
        }
    }
}
