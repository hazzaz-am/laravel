<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUserForm extends Controller
{
    public function addUser(Request $request)
    {
        $request->validate([
            'username' => 'required | min:2 | max:20',
            'email' => 'required | email',
            'city' => 'required | max:20',
            'skill' => 'required',
        ]);

        return $request;
    }
}
