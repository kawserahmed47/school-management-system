<?php

namespace App\Http\Controllers;

use App\Models\StudentWeaver;
use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentWeaverController extends Controller
{
    
    public function index()
    {
        $data['waivers'] = StudentWeaver::with('student')->get();
        return view('pages.student-management.student-waiver.index',$data);

    }

  
    public function create()
    {
        $data['students'] = Student::all();
        return view('pages.student-management.student-waiver.create', $data);
    }


    public function store(Request $request)
    {

        
        $user = Student::find($request->student_id);

        $waiver = new StudentWeaver();
        $waiver->name = $request->name;
        $waiver->student_id = $request->student_id;
        $waiver->user_id = $user->user_id;
        $waiver->id_no = $user->id;
        $waiver->percentage = $request->percentage;
        // $waiver->description = $request->description;
        // $waiver->status = $request->status;
        $waiver->created_by = Auth::id();
        $waiver->save();

        return redirect()->route('waiver.index');

    }


    public function show($id)
    {
        $data['waiver'] = StudentWeaver::find($id);
        return view('pages.student-management.student-waiver.show', $data);
    }


    public function edit($id)
    {
        $data['students'] = Student::all();
        $data['waiver'] = StudentWeaver::with('student')->where('id', $id)->first();
        return view('pages.student-management.student-waiver.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $user = Student::find($request->student_id);
        $waiver = StudentWeaver::find($id);
        $waiver->name = $request->name;
        $waiver->student_id = $request->student_id;
        $waiver->user_id = $user->user_id;
        $waiver->id_no = $user->id;
        $waiver->percentage = $request->percentage;
        // $waiver->description = $request->description;
        // $waiver->status = $request->status;
        $waiver->updated_by = Auth::id();
        $waiver->save();
        
        return redirect()->route('waiver.index');
    }


    public function destroy($id)
    {
        $waiver = StudentWeaver::find($id);
        $waiver->delete();
        return redirect()->route('waiver.index');

    }
}

