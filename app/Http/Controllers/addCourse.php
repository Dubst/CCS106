<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class addCourse extends Controller
{
    public function index(){

        return view('addCourse', [
            'teachers' => Teacher::all()
        ]);

    }
}
