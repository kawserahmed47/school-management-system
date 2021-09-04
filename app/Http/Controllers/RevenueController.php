<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    
    public function index()
    {
        $data['revenues'] = Revenue::get();
        return view('pages.accounts-management.revenue-generate.index', $data);


    }


    public function create()
    {
       

        return view('pages.accounts-management.revenue-generate.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $data['revenue'] = Revenue::where('id', $id)->first();

        return view('pages.accounts-management.revenue-generate.index', $data);
    }


    public function edit( $id)
    {

        $data['revenue'] = Revenue::with('employee')->where('id', $id)->first();
        return view('pages.accounts-management.revenue-generate.index', $data);
    }


    public function update(Request $request,  $id)
    {
        //
    }


    public function destroy( $id)
    {
        $query = Revenue::where('id', $id)->first();

        if($query){

            $query->delete();

            return redirect()->route('revenue.index');

        }else{
            return redirect()->back();
        }

    }
}

