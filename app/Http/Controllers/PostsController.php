<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // Fetch all posts.
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        // Fetch archives.
        $archives = Post::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();

    	return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
        // Validate the request data.
        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);

    	// Create a post using the request data.
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

    	// Redirect to the homepage.
    	return redirect('/');
    }
}
