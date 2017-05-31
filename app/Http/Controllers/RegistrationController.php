<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\RegistrationComplete;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	// Validate the form.
    	$this->validate(request(), [
    		'name'     => 'required',
    		'email'    => 'required|email',
    		'password' => 'required|confirmed'
		]);

    	// Create and save the user.
    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

    	// Sign them in.
    	auth()->login($user);

        // Send confirmation email to the user.
        \Mail::to($user)->send(new RegistrationComplete);

    	// Redirect to the homepage.
    	return redirect()->home();
    }
}
