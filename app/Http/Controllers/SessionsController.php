<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
    	// Logout current user.
    	auth()->logout();

    	// Redirect to the homepage.
    	return redirect()->home();
    }
}
