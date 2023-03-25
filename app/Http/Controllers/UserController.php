<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Return view depending on user role
    public function index()
    {

        // $users = User::find(auth()->user()->id);

    }

}
