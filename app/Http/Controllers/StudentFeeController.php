<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentFee;
use App\Models\AssignSubject;
use App\Models\ExamType;
use App\Models\FeeCategoryAmount;
use App\Models\StudentMark;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentFeeController extends Controller
{
   
    public function index()
    {
        $data['studentFees'] = StudentFee::with('student', 'studentYear', 'studentClass')->with(array('feeCategoryAmount'=>function($q1){
            $q1->with('feeCategory')->get();
        }))->get();
        return view('pages.accounts-management.student-fee.index', $data);
    }

    
    public function create()
    {

        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['students'] = Student::all();
        $data['feeCategoryAmounts'] = FeeCategoryAmount::with('feeCategory', 'studentClass')->get();

        return view('pages.accounts-management.student-fee.create', $data);

    }

 
    public function store(Request $request)
    {

        $student = Student::find($request->student_id);

        $feeCategory= FeeCategoryAmount::find($request->fee_category_amount_id);

        $studentFee = new StudentFee();

        $studentFee->student_id = $request->student_id;
        $studentFee->user_id = $student->user_id;
        $studentFee->id_no = $student->id_no;

        $studentFee->student_year_id = $request->student_year_id;
        $studentFee->student_class_id = $request->student_class_id;
        $studentFee->fee_category_amount_id = $request->fee_category_amount_id;
        $studentFee->fee_category_id = $feeCategory->fee_category_id;
        $studentFee->amount = $request->amount;
        $studentFee->payment_date = $request->payment_date;
        $studentFee->description = $request->description;

        $studentFee->created_by = Auth::id();

        $studentFee->save();
       
        return redirect()->route('studentFee.index');
    }


    public function show($id)
    {
        $data['studentFee'] = StudentFee::find($id);
        return view('pages.accounts-management.student-fee.show', $data);
    }


    public function edit($id)
    {
        $data['studentFee'] = StudentFee::find($id);
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['students'] = Student::all();
        $data['feeCategoryAmounts'] = FeeCategoryAmount::with('feeCategory', 'studentClass')->get();

        return view('pages.accounts-management.student-fee.edit', $data);
    }


    public function update(Request $request,  $id)
    {

        
        $student = Student::find($request->student_id);

        $feeCategory= FeeCategoryAmount::find($request->fee_category_amount_id);

        $studentFee = StudentFee::find($id);

        $studentFee->student_id = $request->student_id;
        $studentFee->user_id = $student->user_id;
        $studentFee->id_no = $student->id_no;

        $studentFee->student_year_id = $request->student_year_id;
        $studentFee->student_class_id = $request->student_class_id;
        $studentFee->fee_category_amount_id = $request->fee_category_amount_id;
        $studentFee->fee_category_id = $feeCategory->fee_category_id;
        $studentFee->amount = $request->amount;
        $studentFee->payment_date = $request->payment_date;
        $studentFee->description = $request->description;

        $studentFee->updated_by = Auth::id();

        $studentFee->save();
       
        return redirect()->route('studentFee.index');

    }


    public function destroy( $id)
    {
        $query = StudentFee::find($id);
        if($query){
            $query->delete();
        }
        return redirect()->route('studentFee.index');

    }
}
