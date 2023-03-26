<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    // Return list of students that are approved/officially registered
    public function registered()
    {

        return view('librarians.registered', [
            'students' => [
                [
                    'id' => 1,
                    'first_name' => 'Phil', 
                    'last_name' => 'Brooks',
                    'school'    => 'Elk Grove University',
                    'grade' => '12'
                ]
            ]
        ]);

    }

    // Return list of students waiting for approval
    public function approval()
    {

        return view('librarians.approval', [
            'students' => [
                [
                    'id' => 2,
                    'first_name' => 'John', 
                    'last_name' => 'Cena',
                    'school'    => 'Elk Grove University',
                    'grade' => '11'
                ]
            ]
        ]);

    }
    
}
