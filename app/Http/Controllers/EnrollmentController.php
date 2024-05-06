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

     $avail_course = Course::with('Teacher')->paginate(4);

        return view('enrollment', [
            'courses' => $avail_course
        ]);

    }

    public function search(Request $request){

        $validatedData = $request->validate([
            'query' => 'required|exists:students,id'
        ], [
            'query.exists' => 'The provided ID does not exist.'
        ]);

        $id = $validatedData['query'];


      // $student = Student::with('courses.teacher')->find($id);
      $student = Student::with(['courses' => function ($query) {
        $query->with('teacher')->withPivot('id');
    }])->find($id);


        if (!$student) {
            return redirect()->back()->with('error', 'The STUDENT ID does not exist.');
        }

        $courses = $student->courses()->paginate(2);

        return view('/studentenrolledcourse', ['students' => $student], ['courses'=> $courses]);

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

    public function destroyPivot($student_id, $course_id, $pivot_id) {

        $student = Student::find($student_id);

        if (!$student) {
            return redirect()->back()->with('error', 'The student with the provided ID does not exist.');
        }

        // Detach the specific pivot row
        $student->courses()->detach($course_id, ['id' => $pivot_id]);

        return redirect()->back()->with('success', 'Pivot row deleted successfully.');
    }


}
