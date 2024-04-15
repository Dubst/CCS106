<?php
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $hardcoded_students = [
            [
            'id' => 1001,
            'fname' => 'Joreme',
            'lname' => 'Baliwis',
            'address' => 'Mansasa District',
            'birthdate' => '2003-08-13',
            'city' => 'Tagbilaran City',
            'province' => 'Bohol',
            'zip' => '0360',
            ],
            [
            'id' => 1002,
            'fname' => 'Jerome',
            'lname' => 'Baliwas',
            'address' => 'Masansan',
            'birthdate' => '2003-08-13',
            'city' => 'Tagbilaran City',
            'province' => 'Bohol',
            'zip' => '0360',
            ]
        ];
        return view('student', [
            'students' => students::all(),
            'hd_students' => $hardcoded_students
        ]);
    }
}
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
