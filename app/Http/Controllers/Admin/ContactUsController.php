<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\ContactUs;
use DataTables;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->directory = 'admin.contact_us.';
    }

    public function index()
    {
        if (request()->ajax()) {
            $data = ContactUs::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex">';
                    $btn .= '<a href="contact_us/'.$row['id'].'/edit" class="edit float-left mr-2 edit-button">
                                <div class="icon-item edit-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    <span></span>
                                </div>
                            </a>';
                    $btn .= '
                        <form method="POST" class="float-left" action="contact_us/'.$row['id'].'">
                          '.csrf_field().method_field('DELETE').'

                            <div class="form-group">
                                 <div class="icon-item delete-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                    <span></span>
                                 </div>
                             </div>
                        </form>
                        </div>
                    ';
                    return $btn;
                })
                ->addColumn('message', function ($row) {
                    return $row['message'];
                })
                ->rawColumns(['message','action'])
                ->make(true);
        }
        return view($this->directory.'index',compact('companies'));
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
        ContactUs::create( $request->except('_token'));
        return back()->with([ 'success' => 'Message is sent successfully.' ]);
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
    public function edit(ContactUs $contact_us)
    {
        return view( $this->directory.'form', compact('contact_us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contact_us)
    {
        $contact_us->update( $request->except('_token', '_method') );
        return redirect('admin/contact_us')->with(['success' => 'Message is updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contact_us)
    {
        $contact_us->delete();
        return redirect('admin/contact_us')->with(['success' => 'Message is deleted successfully.']);
    }
}
