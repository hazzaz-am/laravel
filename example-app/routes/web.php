<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/home", function () {
    return view("home");
});
// Route::view("/welcome", "welcome");
Route::get("/about/{name}", function ($name) {
    return view("about", ["name" => $name]);
});

Route::redirect("/welcome", "/");


Route::get("user", [UserController::class, "getUser"]);
Route::get("about", [UserController::class, "aboutUser"]);
Route::get("user/{name}", [UserController::class, "getUserName"]);
Route::get("/name/{name}", [UserController::class, "getUserName"]);
Route::get("admin/login", [UserController::class, "adminLogin"]);


Route::view("/employee", "employee");
Route::get("/employee/payment", [EmployeeController::class, "getPaymentDetails"]);
Route::get("/admin/create-post", [AdminController::class, "createPost"]);
Route::get("/admin/posts/{id}", [AdminController::class, "getPostDetailsById"]);

Route::get("/dashboard/home", [HomeController::class, "dashboardHome"]);
