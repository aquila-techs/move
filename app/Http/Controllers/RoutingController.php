<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company\Profile;


class RoutingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $realtors = Profile::whereHas('services',function ($query){
            $query->whereHas('category',function ( $query ){
                $query->where('name','Realtors');
            });
        })->get();

        $pms = Profile::whereHas('services',function ($query){
            $query->whereHas('category',function ( $query ){
                $query->where('name','Professional Movers');
            });
        })->get();

        $sps = Profile::whereHas('services',function ($query){
            $query->whereHas('category',function ( $query ){
                $query->where('name','Service Providers');
            });
        })->get();

        return view('front.home_page2', compact('realtors', 'pms', 'sps'));
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        return view($first);
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {
        return view($first.'.'.$second);
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        return view($first.'.'.$second.'.'.$third);
    }

    /**
     * Logout user
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }


}
