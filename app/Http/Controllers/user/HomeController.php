<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class HomeController extends Controller
{
    public function index() {
        $lastPost = Post::orderBy('id', 'desc')->take(1)->get();
        $last2posts = Post::orderBy('id', 'desc')->take(2)->get();
        $last3posts = Post::orderBy('id', 'desc')->skip(2)->take(3)->get();
        $getlast5posts = Post::orderBy('id', 'desc')->take(5)->get();
        $cats = Category::all();
        return view('user/home', compact('lastPost','last2posts', 'last3posts', 'getlast5posts', 'cats'));
    }

    public function post($id) {
        $post = Post::find($id);
        $getlast5posts = Post::orderBy('id', 'desc')->take(5)->get();
        $cats = Category::all();
        return view('user.post', compact('post', 'getlast5posts', 'cats'));
    }

    public function category($id)
    {
        $posts = Post::all();
        $getlast5posts = Post::orderBy('id', 'desc')->take(5)->get();
        $cats = Category::all();
        $category = Category::find($id);
        return view('user.category', compact('posts', 'getlast5posts', 'cats', 'category'));
    }
}
