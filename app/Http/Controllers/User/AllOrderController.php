<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use Illuminate\Http\Request;

class AllOrderController extends Controller
{
    public function allOrders()
    {
        $user_id =  auth()->id();
        $assessment_orders =  AllOrder::where('order_type','test')->where('users_id',$user_id)->get();
        return view('backend.user.pages.all_orders.index',compact('assessment_orders'));
    }
    public function allTraning()
    {
        $user_id =  auth()->id();
        $assessment_orders =  AllOrder::where('order_type','traning')->where('users_id',$user_id)->get();
        return view('backend.user.pages.all_orders.traning',compact('assessment_orders'));
    }
    public function allTherapy()
    {
        $user_id =  auth()->id();
        $assessment_orders =  AllOrder::where('order_type','therapy')->where('users_id',$user_id)->get();
        return view('backend.user.pages.all_orders.therapy',compact('assessment_orders'));
    }
    public function allTest()
    {
        $user_id =  auth()->id();
        $assessment_orders =  AllOrder::where('order_type','test')->where('users_id',$user_id)->get();
        return view('backend.user.pages.all_orders.test',compact('assessment_orders'));
    }
    public function allService()
    {
        $user_id =  auth()->id();
        $assessment_orders =  AllOrder::where('order_type','service')->where('users_id',$user_id)->get();
        return view('backend.user.pages.all_orders.service',compact('assessment_orders'));
    }
}
