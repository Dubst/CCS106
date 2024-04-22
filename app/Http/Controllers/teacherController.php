<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index(){

        return view('teacher', [
            'teachers' => teachers::all()
        ]);
    }
}
