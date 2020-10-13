<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Company\Profile;
use DB;

class CalculationController extends Controller
{
    // distance calculator
    public function getDistance($request)
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
        $mins = DB::select('
            select min(`price_per_km_for_studio_less_then_100km`) as min, c.name as category from `ratelist`r inner join services s on s.id = r.service_id inner join company_categories c on c.id = s.category_id group by c.name
        ');
        $maxs = DB::select('
            select max(`price_per_km_for_studio_less_then_100km`) as max, c.name as category from `ratelist`r inner join services s on s.id = r.service_id inner join company_categories c on c.id = s.category_id group by c.name
        ');

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

        return view('front.get-quotes',compact('realtors','sps','pms','request','mins','maxs'));
    }

    public function getLocation(Request $request)
    {

        $m_name = $request->m_name;

        $result = DB::select("SELECT distinct(city), latitude, longitude, country  FROM cities ct inner join countries cr on ct.country_id = cr.id WHERE city LIKE '%{$m_name}%'");

        $output = "<ul>";
        if ($result) {
            foreach ($result as $row) {

                $output .= "<li data-latitude='" .$row->latitude."' data-longitude='" .$row->longitude."' >$row->city, $row->country</li>";

            }
        } else {
            $output .= "<li>Location Not Found</li>";
        }
        $output .= "</ul>";
        echo $output;
    }

    public function  test()
    {
        $role = Role::find(4);
        $user = \App\User::find(9)->with('roles')->get();

//        $user->assignRole($role);

        return $user;
    }

    public function fileUpload( Request $request )
    {
        return $request;
    }


}
