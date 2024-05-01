<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::with('Teacher')->get();

        return view('course', [
            'courses' =>  $courses,
            'teachers' => Teacher::all()
        ]);

    }



    public function store()
    {
       $course = Course::create([
           'course_name' => request()->get('cname', ''),
           'course_sched' => request()->get('csched', ''),
           'teacher_id' => request()->get('select_teacher', ''),
           'course_unit' => request()->get('cunit', ''),
       ]);

       return redirect()->route('course')->with('success', 'Sucessfully Registered!');
   }

   public function destroy($id)
   {

    try {
        $course = Course::findorfail($id);
        $course -> delete();
    } catch (\Illuminate\Database\QueryException $e) {
        // Check if the error is due to a foreign key constraint violation
        if ($e->errorInfo[1] == 1451) {
            // Handle the error - display a message to the user
            return redirect()->back()->with('error', 'Cannot delete this record due to an existing record. Please delete the existing record, may be found in another table.');
        } else {
            // Handle other database errors
            return redirect()->back()->with('error', 'An error occurred while deleting the record.');
        }
    }
        return back()->with('success', 'Course has been deleted');
}

    public function show($id){

        $course = Course::with('students','Teacher')->find($id);
        return view('/viewStudents', ['courses' => $course]);

    }


   }



