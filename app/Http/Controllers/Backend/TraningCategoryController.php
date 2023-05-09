<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TraningCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TraningCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $traning_categories = TraningCategory::all();
        return view('backend.admin.pages.traning_category.index',compact('traning_categories'));
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

        TraningCategory::create([
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('name')),
            'status'=>1
        ]);
        toast('Category Added... :)','success');
        return redirect()->route('admin.traning-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TraningCategory $traningCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TraningCategory $traningCategory)
    {
        return view('backend.admin.pages.traning_category.edit',compact('traningCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TraningCategory $traningCategory)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        $traningCategory->update([
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('name')),
            'status'=>1
        ]);
        toast('Category Updated... :)','success');
        return redirect()->route('admin.traning-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TraningCategory $traningCategory)
    {
        if ($traningCategory->image)
        {
            @unlink($traningCategory->image);
        }
        $traningCategory->delete();
        toast('Category Deleted... :)','success');
        return redirect()->route('admin.traning-category.index');
    }
}
