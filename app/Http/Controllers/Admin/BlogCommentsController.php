<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogComments;
use DataTables;

class BlogCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->directory = 'admin.blogs-comments.';
    }

    public function index()
    {
        if (request()->ajax()) {
            $data = BlogComments::latest()->with(['blog','author'])->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex">';
                    $btn .= '<button class="btn edit-comment" style="background: transparent; border:none" class="ml-2" data-id="'.$row['id'].'">
                        <div class="icon-item edit-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            <span></span>
                        </div>
                    </button>';
                    $btn .= '
                        <form method="POST" class="float-left" action="blogs-comments/'.$row['id'].'">
                          '.csrf_field().method_field('DELETE').'

                            <div class="form-group">
                                <button type="submit" style="background: transparent; border:none" class="ml-2 pt-3">
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
                ->rawColumns(['action'])
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BlogComments::create($request->except('_token'));
        return redirect('admin/blogs-comments')->with([ 'success' => 'Comment is updated successfully.' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = BlogComments::findOrFail($id);
        return $comment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $blog->update( $request->except('_token','_method') );
        return redirect('admin\blogs')->with([ 'success' => 'Blog is updated successfully.' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogComments $comment)
    {
        return $comment;
        $blog->delete();
        return back()->with([ 'success' => 'Comment is deleted successfully.' ]);
    }

}
