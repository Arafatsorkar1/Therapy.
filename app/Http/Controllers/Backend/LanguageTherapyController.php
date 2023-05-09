<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LanguageCategory;
use App\Models\LanguageTherapy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LanguageTherapyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $therapys = LanguageTherapy::latest()->get();
        return view('backend.admin.pages.therapy.therapy.index',compact('therapys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = LanguageCategory::where('status',1)->orderBy('serial','DESC')->get();
        return view('backend.admin.pages.therapy.therapy.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        LanguageTherapy::create([
            'users_id'=>auth()->id(),
            'language_categories_id'=>$request->input('language_categories_id'),
            'title'=>$request->input('title'),
            'slug'=>Str::slug($request->input('title')),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'image'=>uploadImage($request),
            'serial'=>$request->input('serial'),
        ]);
        toast('Data Created........ :)','success');
        return redirect()->route('admin.language-therapy.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LanguageTherapy $languageTherapy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param LanguageTherapy $languageTherapy
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(LanguageTherapy $languageTherapy)
    {
        return view('backend.admin.pages.therapy.therapy.edit',compact('languageTherapy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LanguageTherapy $languageTherapy)
    {
        $languageTherapy->update([
            'users_id'=>auth()->id(),
            'title'=>$request->input('title'),
            'slug'=>Str::slug($request->input('title')),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'image'=>uploadImage($request,$languageTherapy),
        ]);
        toast('Data Updated........ :)','success');
        return redirect()->route('admin.language-therapy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LanguageTherapy $languageTherapy)
    {
        if ($languageTherapy->image){
            @unlink($languageTherapy->image);
        }
        $languageTherapy->delete();
        toast('Language Therapy Deleted..... :)','success');
        return redirect()->route('admin.language-therapy.index');
    }
}
