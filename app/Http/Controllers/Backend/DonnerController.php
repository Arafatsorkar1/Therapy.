<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Donner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DonnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donners =  Donner::latest()->get();
        return view('backend.admin.pages.donner.index',compact('donners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.donner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        Donner::create([
            'users_id'=>auth()->id(),
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('slug')),
            'phone'=>$request->input('phone'),
            'donate_date'=>$request->input('donate_date'),
            'short_description'=>$request->input('short_description'),
            'image'=>uploadImage($request),
        ]);
        toast('Donner Created..... :)','success');
        return redirect()->route('admin.donner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donner $donner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donner $donner)
    {
        return view('backend.admin.pages.donner.edit', compact('donner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donner $donner)
    {
        $donner->update([
            'users_id'=>auth()->id(),
            'name'=>$request->input('name'),
            'slug'=>Str::slug($request->input('slug')),
            'phone'=>$request->input('phone'),
            'donate_date'=>$request->input('donate_date'),
            'short_description'=>$request->input('short_description'),
            'image'=>uploadImage($request,$donner),
        ]);
        toast('Donner Updated... :)','success');
        return redirect()->route('admin.donner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donner $donner)
    {
        if ($donner->image)
        {
            @unlink($donner->image);
        }
        $donner->delete();
        toast('Category Deleted... :)','success');
        return redirect()->route('admin.donner.index');
    }
}
