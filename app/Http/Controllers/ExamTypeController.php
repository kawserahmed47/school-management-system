<?php

namespace App\Http\Controllers;

use App\Models\ExamType;
use Illuminate\Http\Request;

use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ExamTypeController extends Controller
{
    
    public function index()
    {
        $data['exams'] = ExamType::all();
        return view('pages.setup.exam-type.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.exam-type.create');
    }


    public function store(Request $request)
    {

        $exam = new ExamType();
        $exam->name = $request->name;
        $exam->slug = Str::slug($request->name, "-");
        // $exam->description = $request->description;
        // $exam->status = $request->status;
        $exam->created_by = Auth::id();
        $exam->save();

        return redirect()->route('examType.index');

    }


    public function show($id)
    {
        $data['exam'] = ExamType::find($id);
        return view('pages.setup.exam-type.show', $data);
    }


    public function edit($id)
    {
        $data['exam'] = ExamType::find($id);
        return view('pages.setup.exam-type.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $exam = ExamType::find($id);
        $exam->name = $request->name;
        $exam->slug = Str::slug($request->name, "-");
        // $exam->description = $request->description;
        // $exam->status = $request->status;
        $exam->updated_by = Auth::id();
        $exam->save();
        
        return redirect()->route('examType.index');
    }


    public function destroy($id)
    {
        $exam = ExamType::find($id);
        $exam->delete();
        return redirect()->route('examType.index');

    }
}
