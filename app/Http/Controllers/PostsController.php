<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Post $posts)
    {
        // Fetch all posts.
        $posts = $posts->all();

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
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

    	// Redirect to the homepage.
    	return redirect('/');
    }
}
