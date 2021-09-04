<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class TeacherController extends Controller
{
    
    public function index()
    {
        $data['teachers'] = Teacher::all();
        return view('pages.teacher-management.teacher-registration.index',$data);

    }

  
    public function create()
    {
        return view('pages.teacher-management.teacher-registration.create');
    }


    public function store(Request $request)
    {

        $default_password = rand(10000000, 999999999);

        $user = new User();
        $user->name = $request->first_name. " ".$request->last_name;
        $user->user_type_id = 3;
        $user->role_id = 1;
        $user->password =  Hash::make($default_password);
        $user->default_password = $default_password;
        $user->save();


        $teacher = new Teacher();
        $teacher->id_no = rand(1000,9999);
        $teacher->user_id = $user->id;
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;

        $teacher->slug = Str::slug($request->first_name, "-");
        // $teacher->description = $request->description;
        // $teacher->status = $request->status;
        $teacher->created_by = Auth::id();
        $teacher->save();

        return redirect()->route('teacher.index');

    }


    public function show($id)
    {
        $data['teacher'] = Teacher::find($id);
        return view('pages.teacher-management.teacher-registration.show', $data);
    }


    public function edit($id)
    {
        $data['teacher'] = Teacher::find($id);
        return view('pages.teacher-management.teacher-registration.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $teacher = Teacher::find($id);
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->slug = Str::slug($request->first_name, "-");
        // $teacher->description = $request->description;
        // $teacher->status = $request->status;
        $teacher->updated_by = Auth::id();
        $teacher->save();
        
        return redirect()->route('teacher.index');
    }


    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->route('teacher.index');

    }
}
