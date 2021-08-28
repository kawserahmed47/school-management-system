<?php

namespace App\Http\Controllers;

use App\Models\AssignSubject;
use App\Models\StudentClass;
use App\Models\Subject;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AssignSubjectController extends Controller
{
    
    public function index()
    {
        $data['assigns'] = AssignSubject::with('subject', 'studentClass')->get();
        return view('pages.setup.assign-subject.index',$data);

    }

  
    public function create()
    {
        $data['subjects'] = Subject::all();
        $data['classes'] = StudentClass::all();
        
        return view('pages.setup.assign-subject.create', $data);
    }


    public function store(Request $request)
    {

        $assign = new AssignSubject();

        $assign->subject_id = $request->subject_id;
        $assign->student_class_id = $request->student_class_id;
        $assign->full_mark = $request->full_mark;
        $assign->pass_mark = $request->pass_mark;



        // $assign->description = $request->description;
        // $assign->status = $request->status;
        $assign->created_by = Auth::id();
        $assign->save();

        return redirect()->route('assignSubject.index');

    }


    public function show($id)
    {
        $data['assign'] = AssignSubject::find($id);
        return view('pages.setup.assign-subject.show', $data);
    }


    public function edit($id)
    {
        $data['subjects'] = Subject::all();
        $data['classes'] = StudentClass::all();

        $data['assign'] = AssignSubject::with('subject', 'studentClass')->where('id', $id)->first();
        return view('pages.setup.assign-subject.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $assign = AssignSubject::find($id);
        
        $assign->subject_id = $request->subject_id;
        $assign->student_class_id = $request->student_class_id;
        $assign->full_mark = $request->full_mark;
        $assign->pass_mark = $request->pass_mark;


        // $assign->description = $request->description;
        // $assign->status = $request->status;
        $assign->updated_by = Auth::id();
        $assign->save();
        
        return redirect()->route('assignSubject.index');
    }


    public function destroy($id)
    {
        $assign = AssignSubject::find($id);
        $assign->delete();
        return redirect()->route('assignSubject.index');

    }
}
