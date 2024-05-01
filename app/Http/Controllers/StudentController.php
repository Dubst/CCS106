<?php
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;

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
            'students' => Student::orderBy('id')->paginate(5),
            'hd_students' => $hardcoded_students
        ]);
    }

    public function show($id)
    {
        $students = Student::findorfail($id);
        return view('/editstudent', ['students' => $students]);
    }

    public function update(StudentRequest $request, $id){
        $validated = $request->validated();
        $info = Student::findorfail($id);
        $info->update($validated);

        $request->session()->regenerate();
        return redirect('/student')->with('success', "Successfully Edited");
    }


    public function destroy($id)
    {
        $student = Student::findorfail($id);
        $student -> delete();
        return back()->with('success', 'User has been deleted');
    }
}
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
