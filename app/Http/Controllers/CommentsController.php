<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	// Validate the comment request.
    	$this->validate(request(), ['body' => 'required|min:2']);

    	// Add a comment to a post.
    	$post->addComment(request('body'));

    	return back();
    }
}
