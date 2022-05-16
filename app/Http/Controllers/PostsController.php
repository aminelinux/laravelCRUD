<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //sortByDesc() or >sortBy()
        //$posts = Post::all()->sortByDesc('title');
        //$posts = Post::all()->sortByDesc('title')->take(1);
        //$post = Post::where('title','Post Two')->get();
        //$post = DB::select('SELECT * FROM posts');
        //$posts = Post::all()->sortByDesc('title');
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Form validation
         $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
         ]);
        //  Store data in database
        Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
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
        //$post = Post::find($id);
         // Form validation
         $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
         ]);
         //gettings requested inputs
        // $post = $request->$input('title');
         //$post = $request->$input('body');
        //  Store data in database
        $post= Post::whereId($id)->update($request->except(['_method','_token','Update']));
        //$post->save();
        return redirect('/Post')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        return redirect('/Post')->with('succes','Post Deleted');
    }
}
