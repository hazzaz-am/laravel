<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function getUser()
    {
        return 'Hazzaz';
    }

    public function aboutUser()
    {
        return 'Hello This is Hazzaz Abdul Mannan';
    }

    public function getUserName($name)
    {
        return view('name', ['name' => $name]);
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function showDynamicUser()
    {
        return to_route('aboutUser', ['name' => 'hazzaz', 'information' => 'jobs']);
    }
}
