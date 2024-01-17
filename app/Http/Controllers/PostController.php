<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Post; // perhatikan perubahan di sini

// class PostController extends Controller
// {
//     public function index()
// {
//     $posts = Post::latest();

//     // Memindahkan dd setelah kondisional
//     if(request('search')){
//         $posts->where('title', 'LIKE', '%' . request('search') . '%');
//     }

//     return view('Post', [
//         'title' => 'All Posts',
//         'post' => $posts->get()
//     ]);
// }

//     public function show(post $post)
//     {
//         return view('pst',[
//             "title" => "Single Post",
//             'posts' =>$post
//         ]);
    
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

            $title = '';
    if (request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = ' in ' . $category->name;
    }
    if (request('author')) {
        $author = User::firstWhere('username', request('author'));
        $title = ' by ' . $author->name;
    }

    //     $title = '';
    //     if(request('category')) {
    //         $category = Category::firstWhere('slug' request('cstegory'));
    //         $title = ' in ' . $category;
    //     }

        return view('Post', [
            'title' => 'All Posts'. $title,
            'posts' => Post::latest()->filter(request(['search', "author"]))->paginate(7)->withQuerystring()
        ]);
    }

    public function show(Post $post)
    {
        return view('pst', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
