<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use App\Models\Traning;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class AllOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $assessment_orders =  AllOrder::with(['category','user'])->where('order_type','assessment')->get();
        return view('backend.admin.pages.order.assessment.index',compact('assessment_orders'));
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
    public function show(AllOrder $allOrder)
    {
       $order = AllOrder::with(['category','user'])->findOrFail($allOrder->id);
       return view('backend.admin.pages.order.assessment.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AllOrder $allOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AllOrder $allOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AllOrder $allOrder)
    {
        //
    }

    public function allTraningOrder()
    {
        $traning_orders =  AllOrder::with(['orderTraning'])->where('order_type','traning')->get();
        return view('backend.admin.pages.order.traning.index',compact('traning_orders'));
    }

    public function allTherapyOrder()
    {
        $therapy_orders =  AllOrder::with(['orderTherapy'])->where('order_type','therapy')->get();
        return view('backend.admin.pages.order.therapy.index',compact('therapy_orders'));
    }

    public function allTestOrder()
    {
        $test_orders =  AllOrder::with(['orderTest'])->where('order_type','test')->get();
        return view('backend.admin.pages.order.test.index',compact('test_orders'));
    }

    public function allServiceOrder()
    {
        $service_orders =  AllOrder::with(['orderService'])->where('order_type','service')->get();
        return view('backend.admin.pages.order.service.index',compact('service_orders'));
    }
}
