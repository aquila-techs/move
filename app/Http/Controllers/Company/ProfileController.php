<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->directory = 'companies.profile.';
    }

    public function index()
    {
        $profile = Profile::where('user_id',\Auth::user()->id)->first();
        return view($this->directory.'index',compact('profile'));
    }

    public function show($id)
    {
        return $id;
    }

    public function edit(Profile $profile)
    {
        return view($this->directory.'edit',compact('profile'));
    }

    public function update( Profile $profile, Request $request )
    {
        $this->validate($request, [
            'name' => 'required|unique:company_profile,name,'.$profile->id,
            'company_email' => 'required|unique:company_profile,company_email,'.$profile->id,
            'phone_number' => 'unique:company_profile,phone_number,'.$profile->id,
        ]);
        $profile->update($request->except('_token','user_id'));
        return redirect('company/profile')->with(['success' => 'Profile is updated successfully.']);
    }

}
