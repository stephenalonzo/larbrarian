<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Return dashboard view
    public function index()
    {

        return view('index');

    }
    
}
