<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Company\Profile;
use function foo\func;

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
        $realtors = \App\Company\Services::whereHas('category', function ( $query ){
            return $query->where('name','Realtors');
        } )->get();
        foreach( $realtors as $index => $row )
        {
            $company = \App\Company\Profile::whereId($row->profile_id)->first();
            $realtors[$index]['company'] = $company;
        }

        $pms = \App\Company\Services::whereHas('category', function ( $query ){
            return $query->where('name','Professional Movers');
        } )->get();
        foreach( $pms as $index => $row )
        {
            $company = \App\Company\Profile::whereId($row->profile_id)->first();
            $pms[$index]['company'] = $company;
        }

        $sps = \App\Company\Services::whereHas('category', function ( $query ){
            return $query->where('name','Service Providers');
        } )->get();

        foreach( $sps as $index => $row )
        {
            $company = \App\Company\Profile::whereId($row->profile_id)->first();
            $sps[$index]['company'] = $company;
        }

        return view('front.get-quotes',compact('realtors','sps','pms','request'));
    }

    public function  test()
    {
        $data = \App\Company\Services::whereHas('category', function ( $query ){
            return $query->where('name','Realtors');
        } )->get();
        foreach( $data as $index => $row )
        {
           $company = \App\Company\Profile::whereId($row->profile_id)->first();
            $data[$index]['company'] = $company;
        }
        return $data;
    }


}
