<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DesignationController extends Controller
{
    
    public function index()
    {
        $data['designations'] = Designation::all();
        return view('pages.setup.designation.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.designation.create');
    }


    public function store(Request $request)
    {

        $designation = new Designation();
        $designation->name = $request->name;
        $designation->slug = Str::slug($request->name, "-");
        // $designation->description = $request->description;
        // $designation->status = $request->status;
        $designation->created_by = Auth::id();
        $designation->save();

        return redirect()->route('designation.index');

    }


    public function show($id)
    {
        $data['designation'] = Designation::find($id);
        return view('pages.setup.designation.show', $data);
    }


    public function edit($id)
    {
        $data['designation'] = Designation::find($id);
        return view('pages.setup.designation.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $designation = Designation::find($id);
        $designation->name = $request->name;
        $designation->slug = Str::slug($request->name, "-");
        // $designation->description = $request->description;
        // $designation->status = $request->status;
        $designation->updated_by = Auth::id();
        $designation->save();
        
        return redirect()->route('designation.index');
    }


    public function destroy($id)
    {
        $designation = Designation::find($id);
        $designation->delete();
        return redirect()->route('designation.index');

    }
}