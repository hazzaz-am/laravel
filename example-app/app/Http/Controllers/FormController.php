<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function addUser(Request $request)
    {
        $request->validate([
            'username' => 'required | min:2 | max:20',
            'email' => 'required | email',
            'city' => 'required | max:20 | min:2 | uppercase',
        ], [
            'username.required' => 'User name is required',
            'username.min' => 'User name must be greater than 2 characters',
            'username.max' => 'User name must be less than 20 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email address must be valid',
            'city.required' => 'City is required',
            'city.uppercase' => 'City must be in Uppercase'
        ]);

        return $request;
    }
}
