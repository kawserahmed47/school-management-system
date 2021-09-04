<?php

namespace App\Http\Controllers;

use App\Models\StaffSalary;
use Illuminate\Http\Request;

class StaffSalaryController extends Controller
{
    
    public function index()
    {
        $data['staffSalaries'] = StaffSalary::get();
        return view('pages.accounts-management.staff-salary.index', $data);


    }


    public function create()
    {
       

        return view('pages.accounts-management.staff-salary.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $data['staffSalary'] = StaffSalary::where('id', $id)->first();

        return view('pages.accounts-management.staff-salary.index', $data);
    }


    public function edit( $id)
    {

        $data['staffSalary'] = StaffSalary::with('employee')->where('id', $id)->first();
        return view('pages.accounts-management.staff-salary.index', $data);
    }


    public function update(Request $request,  $id)
    {
        //
    }


    public function destroy( $id)
    {
        $query = StaffSalary::where('id', $id)->first();

        if($query){

            $query->delete();

            return redirect()->route('staffSalary.index');

        }else{
            return redirect()->back();
        }

    }
}
