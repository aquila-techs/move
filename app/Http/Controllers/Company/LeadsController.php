<?php

namespace App\Http\Controllers\Company;
use App\Http\Controllers\Controller;
use App\Company\Leads;
use Illuminate\Http\Request;
use DataTables;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->directory = 'companies.leads.';
    }

    public function index()
    {
        if (request()->ajax()) {
            $data = Leads::latest()->where('status','in-progress')->whereHas('service',function ($query){
                $query->where('profile_id',\Auth::user()->profile->id);
            })->with('service')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return "<a  href=".url('company/leads/'.$row['id'].'/change-status')." class='btn btn-sm btn-warning'>Change To Complete</a>";
                })
                ->addColumn('service', function ($row) {
                    return "<a  class='link' href=".url('company/services/'.$row['service']['id']).">".$row['service']['category']['name']."</a>";
                })
                ->addColumn('distance', function ($row) {
                    return $row['distance']."km";
                })
                ->addColumn('est_price', function ($row) {
                    return "$".$row['est_price'];
                })
                ->rawColumns(['distance','est_price','service','action'])
                ->make(true);
        }
        return view($this->directory.'index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company\Leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function show(Leads $leads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company\Leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function edit(Leads $leads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company\Leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leads $leads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company\Leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leads $leads)
    {
        //
    }

    public function completed()
    {
        if (request()->ajax()) {
            $data = Leads::latest()->where('status','completed')->whereHas('service',function ($query){
                $query->where('profile_id',\Auth::user()->profile->id);
            })->with('service')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return " <a  href=".url('company/leads/'.$row['id'].'/change-status')." class='btn btn-sm btn-success'>Change to In-Progress</a> ";
                })
                ->addColumn('service', function ($row) {
                    return "<a  class='link' href=".url('company/services/'.$row['service']['id']).">".$row['service']['category']['name']."</a>";
                })
                ->addColumn('distance', function ($row) {
                    return $row['distance']."km";
                })
                ->addColumn('est_price', function ($row) {
                    return "$".$row['est_price'];
                })
                ->rawColumns(['distance','est_price','service','action'])
                ->make(true);
        }
        return view($this->directory.'completed');
    }


	public function change_status(Leads $lead)
     {
       if( $lead->status == 'in-progress' )
           $lead->update([ 'status' => 'completed', 'completed_at' => now() ]);
       else
           $lead->update([ 'status' => 'in-progress', 'completed_at' => null ]);

       return back()->with([ 'success' => 'Lead status updated successfully.' ]);
     }



}
