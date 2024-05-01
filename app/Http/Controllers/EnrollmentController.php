<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class EnrollmentController extends Controller
{
    public function index(){

     $avail_course = Course::with('Teacher')->paginate(2);

        return view('enrollment', [
            'courses' => $avail_course
        ]);

    }

    public function search(Request $request){

        $id = $request->input('query');
       //$students = Student::with('courses.Teacher')->findOrFail($id)->get();
       $student = Student::with('courses.teacher')->find($id);
       /* $student = Student::findOrFail($id);
        $student->load('courses.Teacher');*/
        return view('/studentenrolledcourse', ['students' => $student]);

    }

    public function enroll(Request $request){

        $studentId = $request->input('student_id');
        $courseId = $request->input('course_id');

        $student = Student::find($studentId);

        // Attach the student to the course
        $student->courses()->attach($courseId);

        return redirect()->back()->with('success', 'Student enrolled successfully.');

    }

    public function show($id){
        $courses = Course::with('Teacher')->get();
        $student = Student::findOrFail($id);

        return view('/enrollcourses', [
            'courses' =>  $courses,
            'students' => $student
        ]);
    }

}
