<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function dashboardHome() {
        $name = "Nothing";
        $users = ["Hazzaz", "Amin", "Shafin"];
        return view("dashboard.home", ["users" => $users, "name" => $name]);
    }

    function show() {
        return to_route("hm");
    }

    function showHome() {
        return to_route("hm");
    }
}
