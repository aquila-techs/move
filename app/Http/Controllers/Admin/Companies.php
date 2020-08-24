<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class Companies extends Controller
{
    public function __construct()
    {
        $this->directory = 'admin.companies.';
    }

    public function index()
    {
        $companies = User::all();
        return view($this->directory.'index',compact('companies'));
    }

}
