<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $answers = Answer::with('subCategory')->latest()->get();
        return view('backend.admin.pages.answer.index',compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status',1)->get(['id','name']);
        $sub_categories = SubCategory::where('status',1)->get();
        return view('backend.admin.pages.answer.create',compact('categories','sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       Answer::create([
           'users_id'=>auth()->id(),
           'categories_id'=>$request->input('categories_id'),
           'sub_categories_id'=>$request->input('sub_categories_id'),
           'name'=>$request->input('name'),
           'mark'=>$request->input('mark'),
       ]);
        toast('Answer created... :)','success');
        return redirect()->route('admin.answer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $answer)
    {
        return view('backend.admin.pages.answer.edit',compact('answer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Answer $answer)
    {

        $data = $this->validate($request,[
            'name'=>'required',
            'mark'=>'required',
        ]);
        $data['users_id']=auth()->id();
        $data['status']=1;
        $answer->update($data);
        toast('Answer Updated... :)','success');
        return redirect()->route('admin.answer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $answer)
    {
        $answer->delete();
        toast('Delete Successfully.... :)','success');
        return redirect()->back();
    }
}
