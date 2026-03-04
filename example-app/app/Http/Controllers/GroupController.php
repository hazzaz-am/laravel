<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    function add ($name) {
        return "$name Add Successfully";
    }
    function update () {
        return "Group Updated";
    }
    function delete () {
        return "Group Deleted";
    }
    function list () {
        return "Show Group List";
    }
}
