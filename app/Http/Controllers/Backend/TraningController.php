<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Traning;
use App\Models\TraningCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TraningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tranings = Traning::latest()->get();
        return view('backend.admin.pages.traning.index',compact('tranings'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
       $t_category = TraningCategory::where('status',1)->latest()->get();
        return view('backend.admin.pages.traning.create',compact('t_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'traning_categories_id'=>'required',
            'title'=>'required',
            'price'=>'required',
        ]);
        Traning::create([
            'traning_categories_id'=>$request->input('traning_categories_id'),
            'title'=>$request->input('title'),
            'sub_title'=>$request->input('sub_title'),
            'slug'=>Str::slug($request->input('title')),
            'image'=>uploadImage($request),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
        ]);
        toast('Traning Created... :)','success');
        return redirect()->route('admin.traning.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Traning $traning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Traning $traning)
    {
        $t_category = TraningCategory::where('status',1)->latest()->get();
        return view('backend.admin.pages.traning.edit',compact('t_category','traning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Traning $traning)
    {
        $this->validate($request,[
            'traning_categories_id'=>'required',
            'title'=>'required',
            'price'=>'required',
        ]);
        $traning->update([
            'traning_categories_id'=>$request->input('traning_categories_id'),
            'title'=>$request->input('title'),
            'sub_title'=>$request->input('sub_title'),
            'slug'=>Str::slug($request->input('title')),
            'image'=>uploadImage($request,$traning),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
        ]);
        toast('Traning Updated... :)','success');
        return redirect()->route('admin.traning.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Traning $traning)
    {
        if ($traning->image){
            @unlink($traning->image);
        }
        $traning->delete();
        return redirect()->route('admin.traning.index');
    }
}
