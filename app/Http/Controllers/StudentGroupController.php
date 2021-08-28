<?php

namespace App\Http\Controllers;

use App\Models\StudentGroup;
use Illuminate\Http\Request;

use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentGroupController extends Controller
{
    
    public function index()
    {
        $data['groups'] = StudentGroup::all();
        return view('pages.setup.student-group.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.student-group.create');
    }


    public function store(Request $request)
    {

        $group = new StudentGroup();
        $group->name = $request->name;
        $group->slug = Str::slug($request->name, "-");
        // $group->description = $request->description;
        // $group->status = $request->status;
        $group->created_by = Auth::id();
        $group->save();

        return redirect()->route('studentGroup.index');

    }


    public function show($id)
    {
        $data['group'] = StudentGroup::find($id);
        return view('pages.setup.student-group.show', $data);
    }


    public function edit($id)
    {
        $data['group'] = StudentGroup::find($id);
        return view('pages.setup.student-group.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $group = StudentGroup::find($id);
        $group->name = $request->name;
        $group->slug = Str::slug($request->name, "-");
        // $group->description = $request->description;
        // $group->status = $request->status;
        $group->updated_by = Auth::id();
        $group->save();
        
        return redirect()->route('studentGroup.index');
    }


    public function destroy($id)
    {
        $group = StudentGroup::find($id);
        $group->delete();
        return redirect()->route('studentGroup.index');

    }
}
