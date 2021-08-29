<?php

namespace App\Http\Controllers;

use App\Models\AssignStudent;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\StudentYear;
use App\Models\Student;
use App\Models\StudentClass;






use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AssignStudentController extends Controller
{
    
    public function index()
    {
        $data['assignStudents'] = AssignStudent::with('student', 'studentClass', 'studentGroup', 'studentShift', 'studentYear')->get();
        return view('pages.student-management.student-assign.index',$data);

    }

  
    public function create()
    {
        $data['groups'] = StudentGroup::all();
        $data['classes'] = StudentClass::all();
        $data['shifts'] = StudentShift::all();
        $data['years'] = StudentYear::all();
        $data['students'] = Student::all();
        
        return view('pages.student-management.student-assign.create', $data);
    }


    public function store(Request $request)
    {

        $student = Student::find($request->student_id);

        $assignStudent = new AssignStudent();

        $assignStudent->student_id = $request->student_id;
        $assignStudent->student_class_id = $request->student_class_id;
        $assignStudent->student_group_id = $request->student_group_id;
        $assignStudent->student_shift_id = $request->student_shift_id;
        $assignStudent->student_year_id = $request->student_year_id;
        $assignStudent->user_id = $student->user_id;
        $assignStudent->id_no =  $student->id_no;



        // $assignStudent->description = $request->description;
        // $assignStudent->status = $request->status;
        $assignStudent->created_by = Auth::id();
        $assignStudent->save();

        return redirect()->route('assignStudent.index');

    }


    public function show($id)
    {
        $data['assignStudent'] = AssignStudent::find($id);
        return view('pages.student-management.student-assign.show', $data);
    }


    public function edit($id)
    {
        $data['groups'] = StudentGroup::all();
        $data['classes'] = StudentClass::all();
        $data['shifts'] = StudentShift::all();
        $data['years'] = StudentYear::all();
        $data['students'] = Student::all();

        $data['assignStudent'] = AssignStudent::with('student', 'studentClass', 'studentGroup', 'studentShift', 'studentYear')->where('id', $id)->first();
        return view('pages.student-management.student-assign.edit', $data);
    }


    public function update(Request $request,  $id)
    {

        $student = Student::find($request->student_id);


        $assignStudent = AssignStudent::find($id);
        
        $assignStudent->student_id = $request->student_id;
        $assignStudent->student_class_id = $request->student_class_id;
        $assignStudent->student_group_id = $request->student_group_id;
        $assignStudent->student_shift_id = $request->student_shift_id;
        $assignStudent->student_year_id = $request->student_year_id;
        $assignStudent->user_id = $student->user_id;
        $assignStudent->id_no =  $student->id_no;

        // $assignStudent->description = $request->description;
        // $assignStudent->status = $request->status;
        $assignStudent->updated_by = Auth::id();
        $assignStudent->save();
        
        return redirect()->route('assignStudent.index');
    }


    public function destroy($id)
    {
        $assignStudent = AssignStudent::find($id);
        $assignStudent->delete();
        return redirect()->route('assignStudent.index');

    }
}
