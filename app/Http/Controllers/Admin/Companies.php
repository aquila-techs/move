<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
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
                    $btn = '<a href="companies/'.$row['id'].'/edit" class="edit btn btn-success btn-sm">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" class="ml-2 delete btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view($this->directory.'index',compact('companies'));
    }

    public function edit(User $company )
    {
        return view($this->directory.'edit',compact('company'));
    }

}
