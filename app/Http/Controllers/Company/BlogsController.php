<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogs;
use DataTables;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->directory = 'companies.blogs.';
    }

    public function index()
    {
//        $data = Blogs::latest()->whereHas('author',function( $query ){
//            $query->where('name',\Auth::user()->name);
//        })->with('author')->with('picture')->get();
//        return $data;
        if (request()->ajax()) {
            $data = Blogs::latest()->whereHas('author',function( $query ){
                $query->where('name',\Auth::user()->name);
            })->with('author')->with('picture')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex">';
                    $btn .= '<a href="blogs/'.$row['id'].'/edit">
                        <div class="icon-item edit-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            <span></span>
                        </div>
                    </a>';
                    $btn .= '
                        <form method="POST" class="float-left" action="blogs/'.$row['id'].'">
                          '.csrf_field().method_field('DELETE').'

                            <div class="form-group">
                                <button style="background: transparent; border:none" type="submit" class="ml-2">
                                    <div class="icon-item delete-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        <span></span>
                                    </div>
                                 </button>
                            </div>
                        </form>
                        </div>
                    ';
                    return $btn;
                })
                ->addColumn('picture', function ($row) {
                    if( $row['picture'] )
                        return '<img width="150px" src="'.asset("storage\\".$row['picture']['path'].$row['picture']['logo']).'" class="img img-thumbnail"/>';
                    else return '<p class="text-center"> No Image. </p>';
                })
                ->addColumn('description', function ($row) {
                    return $row['description'];
                })
                ->rawColumns(['picture','description','action'])
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
        \Auth::user()->blogs()->create( $request->except('_token') );
        return redirect('company/blogs')->with([ 'success' => 'Blog is updated successfully.' ]);
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
    public function edit(Blogs $blog)
    {
        return view($this->directory.'form',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blog)
    {
        $blog->update( $request->except('_token','_method','user_id') );
        return redirect('company\blogs')->with([ 'success' => 'Blog is updated successfully.' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blog)
    {
        $blog->delete();
        return back()->with([ 'success' => 'Blog is deleted successfully.' ]);
    }
}
