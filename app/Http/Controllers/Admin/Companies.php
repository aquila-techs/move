<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Company\Profile;
use DataTables;

class Companies extends Controller
{
    public function __construct()
    {
        $this->directory = 'admin.companies.';
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->whereHas('profile')->with('profile')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex">';
                    $btn .= '<a href="companies/'.$row['profile']['id'].'/edit" class="edit-button mr-2">
                                <div class="icon-item edit-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    <span></span>
                                </div>
                            </a>
                            </div>';
                    return $btn;
                })
                ->addColumn('logo', function ($row) {
                    if( $row['profile']['media']['logo'] )
                        return '<img src="'.asset("storage/company/media/".$row['profile']['media']['logo']).'" class="logo img img-thumbnail img-fluid"/>';
                    else return '<p class="text-center"> No Image. </p>';
                })
                ->rawColumns(['action','logo'])
                ->make(true);
        }
        return view($this->directory.'index',compact('companies'));
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view($this->directory.'edit',compact('profile'));
    }

    public function update( $id, Request $request )
    {
        $profile = Profile::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:company_profile,name,'.$profile->id,
            'company_email' => 'required|unique:company_profile,company_email,'.$profile->id,
            'phone_number' => 'unique:company_profile,phone_number,'.$profile->id,
        ]);
        $profile->update($request->except('_token','user_id'));
        return redirect('admin/companies')->with(['success' => 'Profile is updated successfully.']);
    }

}
