<?php
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class addstudentcontroller extends Controller
{
    public function index(){

        request()->validate([
            'fname' => 'required|min:2|max:30',
            'lname'=> 'required|min:1|max:30',
            'address' => 'required|min:1|max:100',
        ]
        );

        $student = Student::create([
            'fname' => request()->get('fname', ''),
            'lname' => request()->get('lname', ''),
            'address' => request()->get('address', ''),
            'birthdate' => request()->get('bdate', ''),
            'city' => request()->get('city', ''),
            'province' => request()->get('province', ''),
            'zip' => request()->get('zip', '')

        ]);

    return redirect()->route('student')->with('success', 'Sucessfully Registered!');
    //return view('addStudent');
    }
}

/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
