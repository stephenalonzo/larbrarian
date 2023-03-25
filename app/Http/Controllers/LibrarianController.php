<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    // Return dashboard view
    public function index()
    {

        return view('librarians.index');

    }
}
