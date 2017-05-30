<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // dd(request(['email', 'password']));
        // Attempt to authenticate the user.
        if (! auth()->attempt(request(['email', 'password']))) {
            // Not an authenticated user.
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
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
