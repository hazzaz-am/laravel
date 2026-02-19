<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    function createPost() {
        return view("admin.create-post");
    }

    function getPostDetailsById ($id) {
        if (View::exists("admin.posts.post-details")) {
            return view("admin.posts.post-details", ["id" => $id]);
        }else {
            echo "No View Found";
        }
    }

}
