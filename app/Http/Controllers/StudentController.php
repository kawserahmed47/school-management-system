<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    
    public function index()
    {
        $data['students'] = Student::all();
        return view('pages.student-management.student-registration.index',$data);

    }

  
    public function create()
    {
        return view('pages.student-management.student-registration.create');
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


        $student = new Student();
        $student->id_no = rand(1000,9999);
        $student->user_id = $user->id;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;

        $student->slug = Str::slug($request->first_name, "-");
        // $student->description = $request->description;
        // $student->status = $request->status;
        $student->created_by = Auth::id();
        $student->save();

        return redirect()->route('student.index');

    }


    public function show($id)
    {
        $data['student'] = Student::find($id);
        return view('pages.student-management.student-registration.show', $data);
    }


    public function edit($id)
    {
        $data['student'] = Student::find($id);
        return view('pages.student-management.student-registration.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $student = Student::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->slug = Str::slug($request->first_name, "-");
        // $student->description = $request->description;
        // $student->status = $request->status;
        $student->updated_by = Auth::id();
        $student->save();
        
        return redirect()->route('student.index');
    }


    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');

    }
}
