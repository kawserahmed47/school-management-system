<?php

namespace App\Http\Controllers;

use App\Models\StudentYear;
use Illuminate\Http\Request;

use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentYearController extends Controller
{
    
    public function index()
    {
        $data['years'] = StudentYear::all();
        return view('pages.setup.student-year.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.student-year.create');
    }


    public function store(Request $request)
    {

        $year = new StudentYear();
        $year->name = $request->name;
        $year->slug = Str::slug($request->name, "-");
        // $year->description = $request->description;
        // $year->status = $request->status;
        $year->created_by = Auth::id();
        $year->save();

        return redirect()->route('studentYear.index');

    }


    public function show($id)
    {
        $data['year'] = StudentYear::find($id);
        return view('pages.setup.student-year.show', $data);
    }


    public function edit($id)
    {
        $data['year'] = StudentYear::find($id);
        return view('pages.setup.student-year.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $year = StudentYear::find($id);
        $year->name = $request->name;
        $year->slug = Str::slug($request->name, "-");
        // $year->description = $request->description;
        // $year->status = $request->status;
        $year->updated_by = Auth::id();
        $year->save();
        
        return redirect()->route('studentYear.index');
    }


    public function destroy($id)
    {
        $year = StudentYear::find($id);
        $year->delete();
        return redirect()->route('studentYear.index');

    }
}