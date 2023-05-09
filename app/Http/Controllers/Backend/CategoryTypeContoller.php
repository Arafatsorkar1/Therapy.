<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CategoryType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryTypeContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_types = CategoryType::with(['categories'])->get();
        return view('backend.admin.pages.category_type.index',compact('category_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        CategoryType::create([
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('name')),
            'order'=>$request->input('order'),
            'status'=>1,
        ]);
        toast('Category type created... :)','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryType $categoryType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryType $categoryType)
    {
        $category_types = CategoryType::with(['categories'])->get();
        return view('backend.admin.pages.category_type.index',compact('category_types','categoryType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryType $categoryType)
    {
        CategoryType::updateOrCreate(['id'=>$categoryType->id],[
           'name'=>$request->input('name'),
           'order'=>$request->input('order'),
        ]);
        toast('Data Updated Successfully','success');
        return redirect()->route('admin.category-type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryType $categoryType)
    {
        $categoryType->delete();
        toast('Delete Succesfully... :)','success');
        return redirect()->back();
    }
}
