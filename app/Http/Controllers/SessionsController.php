<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Attempt to authenticate the user.
        if (!auth()->attempt(request(['email', 'password']))) {
            // Not an authenticated user.
            return back();
        }

        // Redirect to the homepage.
        return redirect()->home();
    }

    public function destroy()
    {
    	// Logout current user.
    	auth()->logout();

    	// Redirect to the homepage.
    	return redirect()->home();
    }
}
