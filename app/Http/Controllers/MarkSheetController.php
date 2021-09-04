<?php

namespace App\Http\Controllers;

use App\Models\ExamType;
use App\Models\Student;
use App\Models\StudentClass;
use App\Models\StudentMark;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class MarkSheetController extends Controller
{

   public function index( Request $request ){

        $year = $request->student_year_id;
        $class = $request->student_class_id;
        $exam = $request->exam_type_id;
        $student = $request->student_id;

        $data['markSheets'] = StudentMark::where('student_id', $student)
        ->where('student_class_id', $class)
        ->where('exam_type_id', $exam)
        ->where('student_year_id', $year)
        ->with('student', 'studentYear', 'studentClass', 'examType')
        ->with(array('assignSubject'=>function($q1){
            $q1->with('subject')->get();
        }))
        ->get();

        $data['student'] = Student::find($student);



        return view('pages.marks-management.mark-sheet.create', $data);
   }


   Public function create()
   {

    $data['years'] = StudentYear::all();
    $data['classes'] = StudentClass::all();
    $data['students'] = Student::all();
    $data['examTypes'] = ExamType::all();


    return view('pages.marks-management.mark-sheet.index', $data);
   }


}
