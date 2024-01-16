<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // perhatikan perubahan di sini

class PostController extends Controller
{
    public function index()
    {
        return view('Post',[
            'title'=>'post',
            // 'post'=> Post::all() dan di sini
            'post'=> Post::latest()->get() // dan di sini
        ]);
    }
    public function show(post $post)
    {
        return view('pst',[
            "title" => "Single Post",
            'posts' =>$post
        ]);
    
    }
}