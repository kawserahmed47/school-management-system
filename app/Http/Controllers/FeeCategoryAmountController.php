<?php

namespace App\Http\Controllers;

use App\Models\FeeCategory;
use App\Models\FeeCategoryAmount;
use Illuminate\Http\Request;
use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FeeCategoryAmountController extends Controller
{
    
    public function index()
    {
        $data['amounts'] = FeeCategoryAmount::with('feeCategory', 'studentClass')->get();
        return view('pages.setup.fee-category-amount.index',$data);

    }

  
    public function create()
    {
        $data['categories'] = FeeCategory::all();
        $data['classes'] = StudentClass::all();
        return view('pages.setup.fee-category-amount.create', $data);
    }


    public function store(Request $request)
    {

        $amount = new FeeCategoryAmount();
        $amount->amount = $request->amount;
        $amount->fee_category_id = $request->fee_category_id;
        $amount->student_class_id = $request->student_class_id;

        // $amount->description = $request->description;
        // $amount->status = $request->status;
        $amount->created_by = Auth::id();
        $amount->save();

        return redirect()->route('feeCategoryAmount.index');

    }


    public function show($id)
    {
        $data['amount'] = FeeCategoryAmount::find($id);
        return view('pages.setup.fee-category-amount.show', $data);
    }


    public function edit($id)
    {
        $data['categories'] = FeeCategory::all();
        $data['classes'] = StudentClass::all();

        $data['amount'] = FeeCategoryAmount::with('feeCategory', 'studentClass')->where('id', $id)->first();
        return view('pages.setup.fee-category-amount.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $amount = FeeCategoryAmount::find($id);
        $amount->amount = $request->amount;
        $amount->fee_category_id = $request->fee_category_id;
        $amount->student_class_id = $request->student_class_id;
        // $amount->description = $request->description;
        // $amount->status = $request->status;
        $amount->updated_by = Auth::id();
        $amount->save();
        
        return redirect()->route('feeCategoryAmount.index');
    }


    public function destroy($id)
    {
        $amount = FeeCategoryAmount::find($id);
        $amount->delete();
        return redirect()->route('feeCategoryAmount.index');

    }
}
