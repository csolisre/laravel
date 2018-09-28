<?php

namespace App\Http\Controllers;

use Validator;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Post::where('user_id', auth()->id())->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        /*validate server side */

       $this->validate(request(),[
            'body'=> 'required', ''
        ]);


        $post= new Post();
        $post->body= $request->body;
        $post->user_id=auth()->id();
        $post->save();
        return $post;
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
        $post= Post::find($id);
        $post->body= $request->body;
        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }

}
