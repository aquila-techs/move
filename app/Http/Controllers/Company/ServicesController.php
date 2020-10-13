<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Company\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->directory = 'companies.services.';
    }

    public function index()
    {
        $profile_id = \Auth::user()->profile->id;
        $services = Services::where('profile_id',$profile_id)->get();
        return view($this->directory.'index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->directory.'form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Services();
        $service->category_id = $request->category_id;
        $service->profile_id = \Auth::user()->profile->id;
        $service->save();

        $service->rates()->create($request->except(['_token','category_id']));

        return redirect('company/services')->with(['success' => 'Service has been added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Services $service )
    {
        return $service;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        return view( $this->directory.'edit',compact('service') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        $service->rates()->update(  $request->except([ '_token', '_method' ]) );
        return redirect('company/services')->with([ 'success' => 'Service is updated successfully.' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function status_update( Services $service )
    {
        if( $service->status == 'active') {
            $service->update(['status' => 'deactive']);
            return back()->with([ 'warning' => 'Service is deactivated.' ]);
        }
        else
        $service->update([ 'status' => 'active' ]);

        return back()->with([ 'success' => 'Service is activated.' ]);
    }

}
