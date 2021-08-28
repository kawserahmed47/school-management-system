<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    
    public function index()
    {
        $data['subjects'] = Subject::all();
        return view('pages.setup.subject.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.subject.create');
    }


    public function store(Request $request)
    {

        $exam = new Subject();
        $exam->name = $request->name;
        $exam->slug = Str::slug($request->name, "-");
        // $exam->description = $request->description;
        // $exam->status = $request->status;
        $exam->created_by = Auth::id();
        $exam->save();

        return redirect()->route('subject.index');

    }


    public function show($id)
    {
        $data['subject'] = Subject::find($id);
        return view('pages.setup.subject.show', $data);
    }


    public function edit($id)
    {
        $data['subject'] = Subject::find($id);
        return view('pages.setup.subject.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $exam = Subject::find($id);
        $exam->name = $request->name;
        $exam->slug = Str::slug($request->name, "-");
        // $exam->description = $request->description;
        // $exam->status = $request->status;
        $exam->updated_by = Auth::id();
        $exam->save();
        
        return redirect()->route('subject.index');
    }


    public function destroy($id)
    {
        $exam = Subject::find($id);
        $exam->delete();
        return redirect()->route('subject.index');

    }
}
