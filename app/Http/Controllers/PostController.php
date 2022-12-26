<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        // $posts = Post::latest();

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name;
        }

        return view('posts', [
            "title"  => "All Posts" . $title,
            "active" => "posts",
            "posts"  => Post::latest()
                ->Filter(request(['search', 'category', 'author']))
                ->paginate(7) // buat pagination
                ->withQueryString(), //bawa stringn sebelumnya

            // "posts"  => Post::all() //model
            // "posts"  => Post::with(['author', 'category'])->latest()->get() 
            //model, with adalah n+1 problem
        ]);
    }

    public function show(Post $post) //Post=nama model, $post parameter dari web route
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            // "post" => Post::find($slug) //model
            "post" => $post //model
        ]);
    }
}
