<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class addTeacherController extends Controller
{


    public function index(){

        request()->validate([
            'fname' => 'required|min:2|max:30',
            'lname'=> 'required|min:1|max:30',
            'address' => 'required|min:1|max:100',
        ]
        );

        $student = Teacher::create([
            'fname' => request()->get('fname', ''),
            'lname' => request()->get('lname', ''),
            'address' => request()->get('address', ''),
            'birthdate' => request()->get('bdate', ''),
        ]);

    return redirect()->route('teacher')->with('success', 'Sucessfully Registered!');
    //return view('addStudent');
    }
}
