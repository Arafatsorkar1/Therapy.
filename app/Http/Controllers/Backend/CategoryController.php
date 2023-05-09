<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('categoryType')->latest()->get();
        return view('backend.admin.pages.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Category::create([
            'users_id'=>auth()->id(),
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('name')),
            'serial'=>$request->input('order') ?? 0,
            'status'=>1,
        ]);

        toast('Category Created... :)','success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $sub_categories = SubCategory::where('categories_id',$category->id)->get();
        return view('backend.admin.pages.category.show',compact('category','sub_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.admin.pages.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'users_id'=>auth()->id(),
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('name')),
            'order'=>$request->input('order') ?? 0,
            'status'=>1,
        ]);

        toast('Category Updated... :)','success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        toast('Category Deleted... :)','success');
        return redirect()->route('admin.category.index');
    }
}
