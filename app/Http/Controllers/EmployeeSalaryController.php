<?php

namespace App\Http\Controllers;

use App\Models\EmployeeSalary;
use Illuminate\Http\Request;

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeSalaryController extends Controller
{
    
    public function index()
    {
        $data['employeeSalaries'] = EmployeeSalary::get();
        return view('pages.accounts-management.employee-salary.index', $data);
    }


    public function create()
    {
       
        $data['employees'] = Employee::all();
        return view('pages.accounts-management.employee-salary.create', $data);
    }


    public function store(Request $request)
    {


        $employee = Employee::find($request->employee_id);


        $employeeSalary = new EmployeeSalary();
        $employeeSalary->employee_id = $request->employee_id;
        $employeeSalary->user_id = $employee->user_id;
        $employeeSalary->id_no = $employee->id_no;
        $employeeSalary->amount = $request->amount;
        $employeeSalary->description = $request->description;
        $employeeSalary->payment_date= $request->payment_date;
        $employeeSalary->created_by = Auth::id();
        $employeeSalary->save();

        return redirect()->route('employeeSalary.index');


    }


    public function show($id)
    {
        $data['employeeSalary'] = EmployeeSalary::where('id', $id)->first();

        return view('pages.accounts-management.employee-salary.index', $data);
    }


    public function edit( $id)
    {


        $data['employees'] = Employee::all();
        $data['employeeSalary'] = EmployeeSalary::with('employee')->where('id', $id)->first();




        return view('pages.accounts-management.employee-salary.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $employeeSalary = EmployeeSalary::find($id);
        $employeeSalary->amount = $request->amount;
        $employeeSalary->description = $request->description;
        $employeeSalary->payment_date= $request->payment_date;
        $employeeSalary->updated_by = Auth::id();
        $employeeSalary->save();

        return redirect()->route('employeeSalary.index');
    }


    public function destroy( $id)
    {
        $query = EmployeeSalary::where('id', $id)->first();

        if($query){

            $query->delete();

            return redirect()->route('employeeSalary.index');

        }else{
            return redirect()->back();
        }

    }
}
