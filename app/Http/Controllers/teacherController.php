<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index(){

        return view('teacher', [
            'teachers' => Teacher::all()
        ]);

    }

    public function show($id)
    {
        $teachers = Teacher::findorfail($id);
        return view('/editteacher', ['teachers' => $teachers]);
    }

    public function update(TeacherRequest $request, $id){
        $validated = $request->validated();
        $info = Teacher::findorfail($id);
        $info->update($validated);

        $request->session()->regenerate();
        return redirect('/teachers')->with('success', "Successfully Edited");
    }


    public function destroy($id)
    {
        try {
            $teacher = Teacher::findorfail($id);
            $teacher -> delete();
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

        return back()->with('success', 'User has been deleted');
    }
}
