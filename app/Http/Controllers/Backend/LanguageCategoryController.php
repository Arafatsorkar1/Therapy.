<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LanguageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LanguageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = LanguageCategory::latest()->get();
        return view('backend.admin.pages.therapy.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.therapy.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        LanguageCategory::create([
           'users_id'=>auth()->id(),
           'name'=>$request->input('name'),
           'slug'=>Str::slug($request->input('name')),
           'serial'=>$request->input('serial'),
           'short_description'=>$request->input('short_description'),
        ]);
        toast('Language Therapy Category Created','success');
        return redirect()->route('admin.language-therapy-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LanguageCategory $languageCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param LanguageCategory $languageCategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(LanguageCategory $languageCategory , $id = null)
    {
        $languageCategory = LanguageCategory::findOrFail($id);

        return view('backend.admin.pages.therapy.category.edit',compact('languageCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LanguageCategory $languageCategory, $id = null)
    {
        $languageCategory = LanguageCategory::findOrFail($id);
        $languageCategory->update([
            'users_id'=>auth()->id(),
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('name')),
            'serial'=>$request->input('serial'),
            'short_description'=>$request->input('short_description'),
        ]);
        toast('Language Therapy Category Updated','success');
        return redirect()->route('admin.language-therapy-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LanguageCategory $languageCategory,$id = null)
    {

        $languageCategory = LanguageCategory::findOrFail($id);

        $languageCategory->delete();
        toast('Category Deleted... :)','success');
        return redirect()->route('admin.language-therapy-category.index');
    }
}
