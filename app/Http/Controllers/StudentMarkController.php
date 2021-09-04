<?php

namespace App\Http\Controllers;

use App\Models\AssignSubject;
use App\Models\ExamType;
use App\Models\StudentMark;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\Subject;
use App\Models\Student;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentMarkController extends Controller
{
    
    public function index()
    {
        $data['marks'] = StudentMark::with('examType', 'studentYear', 'studentClass', 'student')->with(array('assignSubject'=>function($q1){
            $q1->with('subject')->get();
        }))->get();
        return view('pages.marks-management.index',$data);

    }

  
    public function create()
    {
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['subjects'] = Subject::all();
        $data['assignSubjects'] = AssignSubject::with('subject', 'studentClass')->get();
        $data['students'] = Student::all();
        $data['examTypes'] = ExamType::all();

        
        return view('pages.marks-management.create', $data);
    }


    public function store(Request $request)
    {
        $student = Student::find($request->student_id);

        $mark = new StudentMark();

        $mark->user_id = $student->user_id;
        $mark->id_no = $student->id_no;

        $mark->student_id = $request->student_id;
        $mark->student_year_id = $request->student_year_id;
        $mark->student_class_id = $request->student_class_id;
        $mark->assign_subject_id = $request->assign_subject_id;
        $mark->exam_type_id = $request->exam_type_id;
        $mark->mark = $request->mark;
        $mark->description = $request->description;
        // $mark->status = $request->status;
        $mark->created_by = Auth::id();
        $mark->save();

        return redirect()->route('mark.index');

    }


    public function show($id)
    {
        $data['mark'] = StudentMark::find($id);
        return view('pages.marks-management.show', $data);
    }


    public function edit($id)
    {
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['subjects'] = Subject::all();
        $data['assignSubjects'] = AssignSubject::with('subject', 'studentClass')->get();
        $data['students'] = Student::all();
        $data['examTypes'] = ExamType::all();

        $data['mark'] =  StudentMark::with('examType', 'studentYear', 'studentClass', 'student')->with(array('assignSubject'=>function($q1){
            $q1->with('subject')->get();
        }))->where('id', $id)->first();
        return view('pages.marks-management.edit', $data);
    }


    public function update(Request $request,  $id)
    {

        $student = Student::find($request->student_id);

        $mark = StudentMark::find($id);
        
        $mark->user_id = $student->user_id;
        $mark->id_no = $student->id_no;
        
        $mark->student_id = $request->student_id;
        $mark->student_year_id = $request->student_year_id;
        $mark->student_class_id = $request->student_class_id;
        $mark->assign_subject_id = $request->assign_subject_id;
        $mark->exam_type_id = $request->exam_type_id;
        $mark->mark = $request->mark;
        $mark->description = $request->description;
        // $mark->status = $request->status;
        $mark->updated_by = Auth::id();
        $mark->save();
        
        return redirect()->route('mark.index');
    }


    public function destroy($id)
    {
        $mark = StudentMark::find($id);
        $mark->delete();
        return redirect()->route('mark.index');

    }
}