<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateAdminRequest;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    // Return dashboard view
    public function index()
    {

        return view('librarians.index');

    }

    // Authenticate Admin
    public function store(AuthenticateAdminRequest $request)
    {

        $request->session()->regenerate();
        return redirect('/');

    }

}
