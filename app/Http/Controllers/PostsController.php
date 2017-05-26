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
    	$post = new Post;

    	// Set post data from request data.
    	$post->title = request('title');
    	$post->body = request('body');

    	// Save the post to the database.
    	$post->save();

    	// Redirect to the posts index.
    	return redirect('/');
    }
}
