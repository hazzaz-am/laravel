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
}
