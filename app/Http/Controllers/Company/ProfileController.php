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
<<<<<<< HEAD
        $profile = Profile::find(\Auth::user()->id);
=======
        $profile = \Auth::user()->profile;
>>>>>>> 547df72f1cb1b168661c73c9ad86f13590ee2dad
        return view($this->directory.'index',compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view($this->directory.'edit',compact('profile'));
    }

    public function update( Profile $profile, Request $request )
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $profile->update($request->except('_token','user_id'));
        return redirect('company/profile')->with(['success' => 'Profile is updated successfully.']);
    }

}
