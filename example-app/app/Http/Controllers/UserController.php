<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        return "Hazzaz";
    }

    function aboutUser() {
    return "Hello This is Hazzaz Abdul Mannan";
    }

    function getUserName($name) {
        return "This is $name";
    }
}
