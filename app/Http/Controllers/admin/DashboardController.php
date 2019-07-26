<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\Admin;

class DashboardController extends Controller
{
    public function index() {
        $cats = Category::all();
        $admins = Count(Admin::all());
        $posts = Post::all();

        return view('admin\dashboard', compact('cats', 'posts', 'admins'));
    }
}
