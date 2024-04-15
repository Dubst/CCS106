<?php
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $students = [
            [
                'name' => 'Joreme N. Baliwis',
                'Age' => 20,
            ],
            [
                'name' => 'Lindsay Marie Doblas',
                'Age' => 21,
            ]
            ];

        return view('dashboard',
            [
                'students' => $students
            ]
    );
        }
}
/*--JOREME N. BALIWIS
    LINDSAY MARIE DOBLAS
*/
