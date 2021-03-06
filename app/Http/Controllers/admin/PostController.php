<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();
        $posts = Post::paginate(10);

        return view('admin.posts.show', compact('cats', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        return view('admin.posts.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'    => 'required',
            'body'     => 'required',
            'image'    => 'required',
            'category' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public/images');
        }

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image = $request->image;

        $post->save();

        $post->category()->sync($request->category);


        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $cats = Category::all();
        return view('admin.posts.edit', compact('cats', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'    => 'required',
            'body'     => 'required',
            'category' => 'required',
        ]);

        if ($request->hasFile('newImage')) {
            $imageName = $request->newImage->store('public/images');
        }

        $post->title = $request->title;
        $post->body = $request->body;

        if ($request->newImage == '') {
            $post->image = $request->image;
        } else {
            $post->image = $request->newImage;
        }

        $post->cat_id = $request->category;


        $post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back();
    }
}
