<?php

namespace App\Http\Controllers;

use App\Models\StudentShift;
use Illuminate\Http\Request;

use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class StudentShiftController extends Controller
{
    
    public function index()
    {
        $data['shifts'] = StudentShift::all();
        return view('pages.setup.student-shift.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.student-shift.create');
    }


    public function store(Request $request)
    {

        $shift = new StudentShift();
        $shift->name = $request->name;
        $shift->slug = Str::slug($request->name, "-");
        // $shift->description = $request->description;
        // $shift->status = $request->status;
        $shift->created_by = Auth::id();
        $shift->save();

        return redirect()->route('studentShift.index');

    }


    public function show($id)
    {
        $data['shift'] = StudentShift::find($id);
        return view('pages.setup.student-shift.show', $data);
    }


    public function edit($id)
    {
        $data['shift'] = StudentShift::find($id);
        return view('pages.setup.student-shift.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $shift = StudentShift::find($id);
        $shift->name = $request->name;
        $shift->slug = Str::slug($request->name, "-");
        // $shift->description = $request->description;
        // $shift->status = $request->status;
        $shift->updated_by = Auth::id();
        $shift->save();
        
        return redirect()->route('studentShift.index');
    }


    public function destroy($id)
    {
        $shift = StudentShift::find($id);
        $shift->delete();
        return redirect()->route('studentShift.index');

    }
}
