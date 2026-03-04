<?php

use App\Http\Controllers\AddUserForm;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// Route::view("/welcome", "welcome");
Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::redirect('/welcome', '/');
Route::get('about', [UserController::class, 'aboutUser']);
Route::get('user/{name}', [UserController::class, 'getUserName']);
Route::get('/name/{name}', [UserController::class, 'getUserName']);
Route::get('admin/login', [UserController::class, 'adminLogin']);

Route::view('/employee', 'employee');
Route::get('/employee/payment', [EmployeeController::class, 'getPaymentDetails']);
Route::get('/admin/create-post', [AdminController::class, 'createPost']);
Route::get('/admin/posts/{id}', [AdminController::class, 'getPostDetailsById']);

Route::get('/dashboard/home', [HomeController::class, 'dashboardHome']);

// form
Route::view('user-form', 'form.user-form');
Route::post('add-user', [AddUserForm::class, 'addUser']);
Route::view('user-details-form', 'form.user-details-form');
Route::post('details-form', [UserDetailsController::class, 'userDetails']);
Route::view('form', 'form.form');
Route::post('addUser', [FormController::class, 'addUser']);

// Url Generation
Route::view('/homeView', 'homeView')->name('hm');
Route::view('/aboutView', 'aboutView');

Route::get('show', [HomeController::class, 'show']);
Route::get('show-home', [HomeController::class, 'showHome']);

Route::view('/profile/user/{name}/{information}', 'user')->name('aboutUser');
Route::get('showDynamic', [UserController::class, 'showDynamicUser']);

// Route Group
Route::prefix("dashboard")->group(function() {
    Route::view("/analytics", "dashboard.analytics");
    Route::view("/employees", "dashboard.employees");
});


Route::controller(GroupController::class)->group(function () {
    Route::get("list", "list");
    Route::get("add/{name}", "add");
    Route::get("update", "update");
    Route::get("delete", "delete");
});
