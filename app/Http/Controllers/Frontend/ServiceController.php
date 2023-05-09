<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use App\Models\FreeService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function singleService($slug)
    {
        $services =  Service::with(['user'])->where('slug',$slug)->first();
        $latest_service = Service::orderBy('created_at','DESC')->get();
        return view('frontend.pages.service.all_service',compact('services','latest_service'));
    }

    public function orderService($slug)
    {
        $service = Service::where('slug',$slug)->first();
        $user =  auth()->user();
        if ($user->type == 'admin'){
            toast('Admin Dont Buy Any Test..... :(','warning');
            return redirect()->back();
        }elseif ($user->type == 'user'){
            return view('frontend.pages.service.order_service',compact('service','user'));
        }else{
            toast('Access Denied..... :(','error');
            return redirect()->back();
        }
    }

    public function serviceOrder(Request $request)
    {
        $service = Service::findOrFail($request->service_id);
        if ($service->price == $request->input('pay_balance')){
            $order = AllOrder::create([
                'order_type'=>'service',
                'order_type_id'=>$service->id,
                'order_id'=>'Th-'.Str::random(5),
                'users_id'=>$request->input('user_id'),
                'pay_balance'=>$request->input('pay_balance'),
                'payment_method'=>$request->input('payment_method'),
                'sended_number'=>$request->input('sended_number'),
                'transaction_id'=>$request->input('transaction_id'),
                'message'=>$request->input('message'),
            ]);

            toast('Your Service Order Success..... :)','success');
            return redirect()->route('order-success',$order->id);
        }else if($service->price > $request->input('pay_balance')){
            toast('Paid less than the value','info');
            return redirect()->back();
        }else if($service->price < $request->input('pay_balance')){
            toast('Paid more than the price','info');
            return redirect()->back();
        }else{
            toast('Anything Wrong.Please Try Again.:(','error');
            return redirect()->back();
        }
    }

    public function freeService()
    {
        $c_unique_id = 'Th-C-'.date('s').rand(11111,99999);
        if (auth()->check()){
            if (auth()->user()->type == 'admin'){
                toast('Admin Dont Access Free Service','warning');
                return  redirect()->back();
            }elseif (auth()->user()->type == 'user'){
                $user = auth()->user();
                return view('frontend.pages.service.free_service',compact('user','c_unique_id'));
            }else{
                toast('Access Denied....:(','error');
                return  redirect()->back();
            }
        }else{
            toast('Please Login First For Free Service','info');
            return  redirect()->route('login');
        }

    }

    public function freeServiceStore(Request $request)
    {
        if (auth()->check()){;

        }
        return FreeService::where('users_id',$request->input('users_id'))->first();

        FreeService::create($request->all());
    }
}
