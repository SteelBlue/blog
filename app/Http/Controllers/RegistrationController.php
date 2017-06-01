<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
    	// Validate and register the new user.
        $form->persist();

        // Display flash message, once new user is created and logged in.
        session()->flash('message', 'Thanks so much for signing up!');

    	// Redirect to the homepage.
    	return redirect()->home();
    }
}
