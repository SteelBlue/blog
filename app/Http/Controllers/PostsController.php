<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function show()
    {
    	return view('posts.show');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	// Create a post using the request data.
    	Post::create(request(['title', 'body']));

    	// Redirect to the homepage.
    	return redirect('/');
    }
}
