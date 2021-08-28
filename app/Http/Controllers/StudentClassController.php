<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentClassController extends Controller
{
    
    public function index()
    {
        $data['classes'] = StudentClass::all();
        return view('pages.setup.student-class.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.student-class.create');
    }


    public function store(Request $request)
    {

        $class = new StudentClass();
        $class->name = $request->name;
        $class->slug = Str::slug($request->name, "-");
        // $class->description = $request->description;
        // $class->status = $request->status;
        $class->created_by = Auth::id();
        $class->save();

        return redirect()->route('studentClass.index');

    }


    public function show($id)
    {
        $data['class'] = StudentClass::find($id);
        return view('pages.setup.student-class.show', $data);
    }


    public function edit($id)
    {
        $data['class'] = StudentClass::find($id);
        return view('pages.setup.student-class.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $class = StudentClass::find($id);
        $class->name = $request->name;
        $class->slug = Str::slug($request->name, "-");
        // $class->description = $request->description;
        // $class->status = $request->status;
        $class->updated_by = Auth::id();
        $class->save();
        
        return redirect()->route('studentClass.index');
    }


    public function destroy($id)
    {
        $class = StudentClass::find($id);
        $class->delete();
        return redirect()->route('studentClass.index');

    }
}
