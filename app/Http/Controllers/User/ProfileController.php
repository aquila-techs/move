<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->directory = 'user.profile.';
    }

    public function index()
    {
        $user = \App\User::whereId(\Auth::user()->id)->with('user_profile')->first();
        return view($this->directory.'index',compact('user'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $user = \App\User::whereId($user_id)->with('user_profile')->first();
        return view($this->directory.'edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request->file('pic')->getClientOriginalName();
        $user = \App\User::whereId($id)->with('user_profile')->first();
        $user->update( $request->only('name') );
        if( isset( $user->user_profile ) )
        {
            $user->user_profile->update( $request->except('_token','_method','name') );
        }
        else
        {
            $user->user_profile->create( $request->except('_token','_method','name') );
        }
        return redirect('user/profile')->with(['success' => 'Profile is updated successfully.']);
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
}
