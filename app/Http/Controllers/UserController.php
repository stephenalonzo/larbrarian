<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    
    // Return login view for admin
    public function librarianLogin()
    {

        return view('librarians.login');

    }

    // Return login view for student
    public function studentLogin()
    {

        return view('students.login');

    }

    // Return register view strictly for students
    public function create()
    {

        return view('students.create');
        
    }

    // Store registered user data
    public function store(StoreUserRequest $request)
    {

        $user = User::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'password'      => bcrypt($request->password_confirmed)
        ]);

        // Auto login student after successful registry
        auth()->login($user);

        return redirect('/');

    }

    // User log out
    public function destroy(Request $request)
    {

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

}
