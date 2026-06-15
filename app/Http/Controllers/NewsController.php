<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::active()->published()->orderBy('published_at', 'desc')->paginate(9);

        return view('pages.news', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::active()->published()->where('slug', $slug)->firstOrFail();

        return view('pages.news-single', compact('post'));
    }
}
