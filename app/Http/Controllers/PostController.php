<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
            'categories' => Category::all(),
            'authors' => User::all(),
            'currentCategory' => Category::firstWhere('slug', request('category')),
            'currentAuthor' => User::firstWhere('username', request('author')),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
            'comments' => $post->comments()->paginate(5),
        ]);
    }

}
