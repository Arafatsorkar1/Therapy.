<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AssessmentOrder;
use Illuminate\Http\Request;

class AssessmentOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders =  AssessmentOrder::with(['category','user'])->get();
        return view('backend.admin.pages.assessment.index',compact('orders'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AssessmentOrder $assessmentOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssessmentOrder $assessmentOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssessmentOrder $assessmentOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssessmentOrder $assessmentOrder)
    {
        //
    }

    public function assessmentOrderVerifi($id)
    {
        $assessment =  AssessmentOrder::findOrFail($id);
        $assessment->status = 1;
        $assessment->save();
        toast('Verify Success....... :)','success');
        return redirect()->back();
    }
}
