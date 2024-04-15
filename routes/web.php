<?php
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
use App\Http\Controllers\addstudentcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', [ DashboardController::class, 'index']);

Route::get('/', function (){
    return view('welcome');
});

Route::get('/student', [ StudentController::class, 'index'])->name('student');

Route::post('/addStudent', [ addstudentcontroller::class, 'index'])->name('addStudent1.create');


Route::get('/addstudent', function (){
    return view('addStudent');
});
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
