<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->get();
        return view('post/index',compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post/show',compact('post'));
    }

    public function create()
    {
        return view('post/create');
    }

    public function edit()
    {
        return view('post/edit');
    }

    public function store()
    {
        dd(\Request::all(['title']));
    }
}
