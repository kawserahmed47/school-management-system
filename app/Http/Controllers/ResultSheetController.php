<?php

namespace App\Http\Controllers;


use App\Models\ExamType;
use App\Models\Student;
use App\Models\StudentClass;
use App\Models\StudentMark;
use App\Models\StudentYear;
use Illuminate\Http\Request;


class ResultSheetController extends Controller
{
    public function index( Request $request ){

        $year = $request->student_year_id;
        $class = $request->student_class_id;
        $exam = $request->exam_type_id;

        $query = StudentMark::where('student_class_id', $class)
        ->where('exam_type_id', $exam)
        ->where('student_year_id', $year)
        ->groupBy('student_id')
        ->select('student_id')
        ->get();

        $data = array();

        if($query){
            foreach($query as $q1){
                $q1->resultSheet = StudentMark::where('student_id', $q1->student_id)
                ->where('student_class_id', $class)
                ->where('exam_type_id', $exam)
                ->where('student_year_id', $year)
                ->with('student', 'studentYear', 'studentClass', 'examType')
                ->with(array('assignSubject'=>function($q2){
                    $q2->with('subject')->get();
                }))
                ->get();

                $q1->student = Student::find($q1->student_id);

            
            }
            $data['results'] = $query;

        }



        // return response()->json($data, 200);
        return view('pages.marks-management.result-sheet.create', $data);
   }


   Public function create()
   {

    $data['years'] = StudentYear::all();
    $data['classes'] = StudentClass::all();
    $data['students'] = Student::all();
    $data['examTypes'] = ExamType::all();


    return view('pages.marks-management.result-sheet.index', $data);
   }
}
