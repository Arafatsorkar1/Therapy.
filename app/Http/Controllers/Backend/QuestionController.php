<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with(['subCategory','subCategory.category'])->latest()->get();
        return view('backend.admin.pages.question.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::with(['subCategories'])->where('status',1)->get(['id','name']);
        return view('backend.admin.pages.question.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Question::create([
            'users_id'=>auth()->id(),
            'categories_id'=>$request->input('categories_id'),
            'sub_categories_id'=>$request->input('sub_categories_id'),
            'title'=>$request->input('title'),
            'slug'=>Str::slug($request->input('title')),
            'status'=>1,
        ]);
        toast('Question Added Successfully ..... :)','success');
        return redirect()->route('admin.question.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $categories = Category::with(['subCategories'])->where('status',1)->get(['id','name']);
        $sub_categories = SubCategory::where('status',1)->get();
        return view('backend.admin.pages.question.edit',compact('categories','sub_categories','question'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Question $question
     */
    public function update(Request $request, Question $question)
    {

        $question->users_id = auth()->id();
        $question->categories_id = $request->input('categories_id');
        $question->sub_categories_id = $request->input('sub_categories_id');
        $question->title = $request->input('title');
        $question->status = 1;
        $question->save();
//        $question->update([
//            'users_id'=>auth()->id(),
//            'categories_id'=>$request->input('categories_id'),
//            'sub_categories_id'=>$request->input('sub_categories_id'),
//            'title'=>$request->input('title'),
//            'status'=>1,
//        ]);
        toast('Question Updated Successfully ..... :)','success');
        return redirect()->route('admin.question.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        toast('Question Deleted Successfully ..... :)','success');
        return redirect()->route('admin.question.index');
    }

    public function getSubCategory(Request $request)
    {
        return $categories = SubCategory::where('categories_id',$request->input('_id'))->get();
    }
}
