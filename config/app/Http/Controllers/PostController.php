<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = auth()->id(); // افتراضي أن يكون هناك نظام تسجيل الدخول
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);
        $comments = $post->comments;
        return view('posts.show', compact('post', 'comments'));
    }
}

