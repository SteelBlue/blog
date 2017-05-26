<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        // Fetch all posts.
        $posts = Post::latest()->get();

    	return view('posts.index', compact('posts'));
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
    	Post::create(request(['title', 'body']));

    	// Redirect to the homepage.
    	return redirect('/');
    }
}
