<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
    	// Create and save the user.
    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

    	// Sign them in.
    	auth()->login($user);

        // Send confirmation email to the user.
        Mail::to($user)->send(new Welcome($user));

    	// Redirect to the homepage.
    	return redirect()->home();
    }
}
