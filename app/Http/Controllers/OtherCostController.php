<?php

namespace App\Http\Controllers;

use App\Models\OtherCost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtherCostController extends Controller
{
    
    public function index()
    {
        $data['otherCosts'] = OtherCost::get();
        return view('pages.accounts-management.other-cost.index', $data);


    }


    public function create()
    {
       

        return view('pages.accounts-management.other-cost.create');
    }


    public function store(Request $request)
    {
        $otherCost = new OtherCost();
        $otherCost->title = $request->title;
        $otherCost->amount = $request->amount;
        $otherCost->payment_date = $request->payment_date;
        $otherCost->description = $request->description;
        $otherCost->created_by = Auth::id();

        $otherCost->save();

        return redirect()->route('otherCost.index');
    }


    public function show($id)
    {
        $data['otherCost'] = OtherCost::where('id', $id)->first();

        return view('pages.accounts-management.other-cost.index', $data);
    }


    public function edit( $id)
    {

        $data['otherCost'] = OtherCost::where('id', $id)->first();
        return view('pages.accounts-management.other-cost.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $otherCost =  OtherCost::find($id);
        $otherCost->title = $request->title;
        $otherCost->amount = $request->amount;
        $otherCost->payment_date = $request->payment_date;
        $otherCost->description = $request->description;
        $otherCost->updated_by = Auth::id();
        $otherCost->save();

        return redirect()->route('otherCost.index');
    }


    public function destroy( $id)
    {
        $query = OtherCost::where('id', $id)->first();

        if($query){

            $query->delete();

            return redirect()->route('otherCost.index');

        }else{
            return redirect()->back();
        }

    }
}
