<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TraningOrder;
use Illuminate\Http\Request;

class TraningOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders =  TraningOrder::with(['user','traning'])->get();
        return view('backend.admin.pages.traning_order.index',compact('orders'));
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
    public function show(TraningOrder $traningOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TraningOrder $traningOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TraningOrder $traningOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TraningOrder $traningOrder)
    {
        //
    }
}
