<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function Illuminate\Process\recordIfRecording;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::latest()->get();
        return view('backend.admin.pages.test.index',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.test.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Test::create([
            'users_id'=> auth()->id(),
            'title'=>$request->input('title') ?? '',
            'slug'=>Str::slug($request->input('title')) ?? '',
            'description'=>$request->input('description') ?? '',
            'price'=>$request->input('price') ?? 0,
            'image'=>uploadImage($request),
            'serial'=>$request->input('serial') ?? null,
        ]);

        toast('Test Create Successfully... :)','success');
        return redirect()->route('admin.test.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        return view('backend.admin.pages.test.edit',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        $test->update([
            'users_id'=> auth()->id(),
            'title'=>$request->input('title') ?? '',
            'slug'=>Str::slug($request->input('title')) ?? '',
            'description'=>$request->input('description') ?? '',
            'price'=>$request->input('price') ?? 0,
            'image'=>uploadImage($request,$test),
            'serial'=>$request->input('serial') ?? null,
        ]);
        toast('Test Updated Successfully... :)','success');
        return redirect()->route('admin.test.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {

//        if (file_exists($test->image))
//        {
//            unlink($test->image);
//        }
//        $test->delete();

        if ( $test->image == 'images/default.jpg'){
            @unlink($test->image);
        }
        $test->delete();
        return redirect()->route('admin.test.index');
    }
}
