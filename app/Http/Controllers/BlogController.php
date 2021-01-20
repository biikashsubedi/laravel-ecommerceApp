<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Product::orderBy('created_at', 'desc')->paginate(2);
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $blog = $request->all();
        Blog::create($blog);
        return redirect('blog');


            



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
    public function edit($id)
    {
        $blog = Product::find($id);
        return view('blog.edit', compact('blog'));
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
        $this->validate($request, [
            'name'=>'Required',
            'qty'=>'Required',
            'price'=>'Required',
            'detail'=>'Required',
            'discount'=>'Required',
            'image'=>'Required',


        ]);

        $blog = Product::find($id);
        $blogUpdate = $request->all();
        $blog->update($blogUpdate);
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Product::find($id);
        $blog->delete();
        return redirect('blog');
    }



    public function upload(Request $request) {
        $this->validate($request,[
            'file'=>'mimes:jpeg,bmp,png|Required'
        ]);

        $clientname = $request->file('file')->getClientOriginalName();
        $imageName = time().'.'.$request->file('file')->getClientOriginalExtension();
        $mimeType = $request->file('file')->getClientMimeType();
        $clientSize = $request->file('file')->getClientSize();

        $info = '<li>Original Name: '.$clientname.'</li>';
        $info .= '<li>New Name: '.$imageName.'</li>';
        $info .= '<li>Mime Type: '.$mimeType.'</li>';
        $info .= '<li>Size: '.$clientSize.' bytes</li>';

        $request->file('file')->move(
            base_path() . '/public/images/', $imageName
        );

        \Session::flash('message', 'Successfully uploaded!<br/>'.$info);
        return redirect('product');
    }
}
