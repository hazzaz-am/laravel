<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function getPaymentDetails() {
        return view("payment");
    }
}
