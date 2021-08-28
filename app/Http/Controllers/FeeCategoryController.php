<?php

namespace App\Http\Controllers;

use App\Models\FeeCategory;
use Illuminate\Http\Request;
use App\Models\StudentClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FeeCategoryController extends Controller
{
    
    public function index()
    {
        $data['categories'] = FeeCategory::all();
        return view('pages.setup.fee-category.index',$data);

    }

  
    public function create()
    {
        return view('pages.setup.fee-category.create');
    }


    public function store(Request $request)
    {

        $category = new FeeCategory();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, "-");
        // $category->description = $request->description;
        // $category->status = $request->status;
        $category->created_by = Auth::id();
        $category->save();

        return redirect()->route('feeCategory.index');

    }


    public function show($id)
    {
        $data['category'] = FeeCategory::find($id);
        return view('pages.setup.fee-category.show', $data);
    }


    public function edit($id)
    {
        $data['category'] = FeeCategory::find($id);
        return view('pages.setup.fee-category.edit', $data);
    }


    public function update(Request $request,  $id)
    {
        $category = FeeCategory::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, "-");
        // $category->description = $request->description;
        // $category->status = $request->status;
        $category->updated_by = Auth::id();
        $category->save();
        
        return redirect()->route('feeCategory.index');
    }


    public function destroy($id)
    {
        $category = FeeCategory::find($id);
        $category->delete();
        return redirect()->route('feeCategory.index');

    }
}
