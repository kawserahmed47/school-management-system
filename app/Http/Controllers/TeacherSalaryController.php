<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherSalary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherSalaryController extends Controller
{
    
    public function index()
    {
        $data['teacherSalaries'] = TeacherSalary::get();
        return view('pages.accounts-management.teacher-salary.index', $data);


    }


    public function create()
    {
       
        $data['teachers'] = Teacher::all();
        return view('pages.accounts-management.teacher-salary.create', $data);
    }


    public function store(Request $request)
    {


        $teacher = Teacher::find($request->teacher_id);


        $teacherSalary = new TeacherSalary();
        $teacherSalary->teacher_id = $request->teacher_id;
        $teacherSalary->user_id = $teacher->user_id;
        $teacherSalary->id_no = $teacher->id_no;
        $teacherSalary->amount = $request->amount;
        $teacherSalary->description = $request->description;
        $teacherSalary->payment_date= $request->payment_date;
        $teacherSalary->created_by = Auth::id();
        $teacherSalary->save();

        return redirect()->route('teacherSalary.index');


    }


    public function show($id)
    {
        $data['teacherSalary'] = TeacherSalary::where('id', $id)->first();

        return view('pages.accounts-management.teacher-salary.index', $data);
    }


    public function edit( $id)
    {


        $data['teachers'] = Teacher::all();
        $data['teacherSalary'] = TeacherSalary::with('teacher')->where('id', $id)->first();




        return view('pages.accounts-management.teacher-salary.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $teacherSalary = TeacherSalary::find($id);
        $teacherSalary->amount = $request->amount;
        $teacherSalary->description = $request->description;
        $teacherSalary->payment_date= $request->payment_date;
        $teacherSalary->updated_by = Auth::id();
        $teacherSalary->save();

        return redirect()->route('teacherSalary.index');
    }


    public function destroy( $id)
    {
        $query = TeacherSalary::where('id', $id)->first();

        if($query){

            $query->delete();

            return redirect()->route('teacherSalary.index');

        }else{
            return redirect()->back();
        }

    }
}