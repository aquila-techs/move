<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CalculationController extends Controller
{
    // distance calculator
    public function getDistance(Request $request)
    {
        $lat1 = $request['zip1']['lat'];
        $lat2 = $request['zip2']['lat'];
        $lon1 = $request['zip1']['long'];
        $lon2 = $request['zip2']['long'];
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

    public function getQuote(Request $request)
    {
        if($request->has('home-moving-form-email'))
        {
            $data = $request;

//            return explode(',',$data->home-moving-form-location-from)[0];
            return view('front.get-quotes',compact('data'));
        }
        return view('front.get-quotes',compact('request'));
    }

    public function  test()
    {
//        $role = Role::find(3);
//        $role->syncPermissions(Permission::all());
        return Role::find(3)->getAllPermissions();
    }


}
