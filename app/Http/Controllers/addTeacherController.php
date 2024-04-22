<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;

class addTeacherController extends Controller
{
    public function index(){
        $student = teachers::create([
            'fname' => request()->get('fname', ''),
            'lname' => request()->get('lname', ''),
            'address' => request()->get('address', ''),
            'birthdate' => request()->get('bdate', ''),
        ]);

    return redirect()->route('teacher')->with('success', 'Sucessfully Registered!');
    //return view('addStudent');
    }
}
