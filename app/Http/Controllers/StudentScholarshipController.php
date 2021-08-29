<?php

namespace App\Http\Controllers;

use App\Models\StudentScholarship;
use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentScholarshipController extends Controller
{
    
    public function index()
    {
        $data['scholarships'] = StudentScholarship::with('student')->get();
        return view('pages.student-management.student-scholarship.index',$data);

    }

  
    public function create()
    {
        $data['students'] = Student::all();
        return view('pages.student-management.student-scholarship.create', $data);
    }


    public function store(Request $request)
    {

        
        $user = Student::find($request->student_id);

        $scholarship = new StudentScholarship();
        $scholarship->name = $request->name;
        $scholarship->student_id = $request->student_id;
        $scholarship->user_id = $user->user_id;
        $scholarship->id_no = $user->id;
        $scholarship->amount = $request->amount;
        $scholarship->balance = $request->amount;
        // $scholarship->description = $request->description;
        // $scholarship->status = $request->status;
        $scholarship->created_by = Auth::id();
        $scholarship->save();

        return redirect()->route('scholarship.index');

    }


    public function show($id)
    {
        $data['scholarship'] = StudentScholarship::find($id);
        return view('pages.student-management.student-scholarship.show', $data);
    }


    public function edit($id)
    {
        $data['students'] = Student::all();
        $data['scholarship'] = StudentScholarship::with('student')->where('id', $id)->first();
        return view('pages.student-management.student-scholarship.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $user = Student::find($request->student_id);
        $scholarship = StudentScholarship::find($id);
        $scholarship->name = $request->name;
        $scholarship->student_id = $request->student_id;
        $scholarship->user_id = $user->user_id;
        $scholarship->id_no = $user->id;
        $scholarship->amount = $request->amount;
        $scholarship->balance = $request->amount;
        // $scholarship->description = $request->description;
        // $scholarship->status = $request->status;
        $scholarship->updated_by = Auth::id();
        $scholarship->save();
        
        return redirect()->route('scholarship.index');
    }


    public function destroy($id)
    {
        $scholarship = StudentScholarship::find($id);
        $scholarship->delete();
        return redirect()->route('scholarship.index');

    }
}
