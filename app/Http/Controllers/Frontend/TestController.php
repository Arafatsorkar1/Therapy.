<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function audiologicalTest()
    {
        $tests = Test::where('status',1)->orderBy('serial','DESC')->paginate(18);
        return view('frontend.pages.audiological_test.tests',compact('tests'));
    }

    public function singleTest($slug)
    {
        $test = Test::with(['user'])->where('slug',$slug)->first();
        $latest_test = Test::latest()->limit(10)->get();
        return view('frontend.pages.audiological_test.single_test',compact('test','latest_test'));
    }

    public function orderTest($slug)
    {
        $test = Test::where('slug',$slug)->first();
        $user =  auth()->user();
        if ($user->type == 'admin'){
            toast('Admin Dont Buy Any Test..... :(','warning');
            return redirect()->back();
        }elseif ($user->type == 'user'){
            return view('frontend.pages.audiological_test.test_order',compact('test','user'));
        }else{
            toast('Access Denied..... :(','error');
            return redirect()->back();
        }
    }

    public function order(Request $request)
    {
        $test = Test::findOrFail($request->test_id);
        if ($test->price == $request->input('pay_balance')){
            $order = AllOrder::create([
                'order_type'=>'test',
                'order_type_id'=>$test->id,
                'order_id'=>'Th-'.Str::random(5),
                'users_id'=>$request->input('user_id'),
                'pay_balance'=>$request->input('pay_balance'),
                'payment_method'=>$request->input('payment_method'),
                'sended_number'=>$request->input('sended_number'),
                'transaction_id'=>$request->input('transaction_id'),
                'message'=>$request->input('message'),
            ]);

            toast('Your Test Order Success..... :)','success');
            return redirect()->route('order-success',$order->id);
        }else if($test->price > $request->input('pay_balance')){
            toast('Paid less than the value','info');
            return redirect()->back();
        }else if($test->price < $request->input('pay_balance')){
            toast('Paid more than the price','info');
            return redirect()->back();
        }else{
            toast('Anything Wrong.Please Try Again.:(','error');
            return redirect()->back();
        }

    }
}
