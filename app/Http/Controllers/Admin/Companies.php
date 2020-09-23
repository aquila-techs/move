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
            $data = User::latest()->with('profile')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="companies/'.$row['profile']['id'].'/edit" class="edit btn btn-success btn-sm">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" class="ml-2 delete btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
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
