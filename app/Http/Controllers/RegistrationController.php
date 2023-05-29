<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function FromRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|string',
            'password' => 'required|string|min:8',
            'email' => 'required|email|regex:/^.+@.+\..+$/',
        ], [
            'name.required' => 'Name field is required.',
            'password.required' => 'Password field is required.',
            'email.required' => 'Email field is required.',
            'email.email' => 'Email field must be email address.'
        ]
        );

        return $validatedData;
    }

}