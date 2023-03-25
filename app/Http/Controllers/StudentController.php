<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Return list of students waiting for approval
    public function approval()
    {

        return view('students.approval', [
            'students' => [
                [
                    'id' => 1,
                    'first_name' => 'John', 
                    'last_name' => 'Cena',
                    'school'    => 'Elk Grove University',
                    'grade' => '12'
                ]
            ]
        ]);

    }
    
}
