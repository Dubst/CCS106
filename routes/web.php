<?php
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/

use App\Http\Controllers\addCourse;
use App\Http\Controllers\addstudentcontroller;
use App\Http\Controllers\addTeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//dashboard controller----------------------------------------------
Route::get('/dashboard', [ DashboardController::class, 'index']);

Route::get('/', function (){
    return view('welcome');
});
//end----------------------------------------------


//student controller----------------------------------------------
Route::get('/student', [ StudentController::class, 'index'])->name('student');

Route::post('/addStudent', [ addstudentcontroller::class, 'index'])->name('addStudent1.create');

Route::get('/addstudent', function (){
    return view('addStudent');
});
Route::get('/editstudent/{id}', [StudentController::class, 'show']);
Route::post('/editstudent/{id}', [StudentController::class, 'update']);
Route::get ('/delete/{id}', [StudentController::class, 'destroy']);
//end----------------------------------------------


//teacher controller---------------------------------------------
Route::get('/teachers', [ teacherController::class, 'index'])->name('teacher');

Route::post('/addTeacher', [ addTeacherController::class, 'index'])->name('addteacher.create');

Route::get('/addteacher', function (){
    return view('addTeacher');
});
Route::get('/editteacher/{id}', [teacherController::class, 'show']);
Route::post('/editteacher/{id}', [teacherController::class, 'update']);
Route::get ('/deleteTeacher/{id}', [teacherController::class, 'destroy']);
//end----------------------------------------------

//course controller-------------------------------
Route::get('/Course', [ CourseController::class, 'index'])->name('course');

Route::post('/addCourse', [ CourseController::class, 'store'])->name('addcourse.create');
Route::get('/addCourse', [ addCourse::class, 'index']);
Route::get('/viewStudents/{id}', [ CourseController::class, 'show']);
Route::get ('/deleteCourse/{id}', [CourseController::class, 'destroy']);


//end ofcourse controller-------------------------------

//enrollment controller--------------------------------
Route::get('/enrollment', [ EnrollmentController::class, 'index'])->name('enrollment');

Route::get('/search', [ EnrollmentController::class, 'search'])->name('search');
Route::get('/enrollcourses/{id}', [ EnrollmentController::class, 'show']);
Route::post('/enroll', [EnrollmentController::class, 'enroll'])->name('enroll');

//end of enrollment controller--------------------------------


/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
