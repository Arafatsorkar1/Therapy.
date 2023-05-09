<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('backend.admin.pages.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::create([
            'users_id'=> auth()->id(),
            'title'=>$request->input('title') ?? '',
            'slug'=>Str::slug($request->input('title')) ?? '',
            'description'=>$request->input('description') ?? '',
            'price'=>$request->input('price') ?? 0,
            'image'=>uploadImage($request),
            'serial'=>$request->input('serial') ?? null,
        ]);

        toast('Service Create Successfully... :)','success');
        return redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('backend.admin.pages.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->update([
            'users_id'=> auth()->id(),
            'title'=>$request->input('title') ?? '',
            'slug'=>Str::slug($request->input('title')) ?? '',
            'description'=>$request->input('description') ?? '',
            'price'=>$request->input('price') ?? 0,
            'image'=>uploadImage($request),
            'serial'=>$request->input('serial') ?? null,
        ]);
        toast('Service Updated Successfully... :)','success');
        return redirect()->route('admin.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->image){
            @unlink($service->image);
        }
        $service->delete();

        return redirect()->route('admin.service.index');
    }
}
