<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('front.blog', compact('posts'));
    }

    public function detail($slug)
    {
        $post_single = Post::where('slug', $slug)->first();
        $post_single->total_view = $post_single->total_view + 1;
        $post_single->update();

        return view('front.post', compact('post_single'));
    }
}
