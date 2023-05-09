<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use App\Models\Traning;
use App\Models\TraningCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home()
    {
         $categories = TraningCategory::with(['tranings'=> function($query){
            $query->latest()->take(3);
        }])->take(3)->get();
        return view('frontend.pages.home.home',compact('categories'));
    }

    public function categoryTraning($slug)
    {
        $category = TraningCategory::with(['tranings'])->where('slug',$slug)->first();
        return view('frontend.pages.category.category_tranings',compact('category'));
    }

    public function singleTraning($slug)
    {
        $traning = Traning::with(['traningCategory'])->where('slug',$slug)->first();

        return view('frontend.pages.category.single_traning',compact('traning'));
    }

    public function buyNow($slug)
    {
        $traning = Traning::where('slug',$slug)->first();
        if (auth()->check()){
            $user =  auth()->user();
            if ($user->type == 'admin'){
                toast('Admin Dont Buy Any Traning..... :(','warning');
                return redirect()->back();
            }elseif ($user->type == 'user'){
                //return view('frontend.pages.language_therapy.order_therapy',compact('therapy','user'));
                return view('frontend.pages.buy_now.buy_now',compact('traning','user'));
            }else{
                toast('Access Denied..... :(','error');
                return redirect()->back();
            }
        }else{
            toast('Please Login First For Buy a Traning','info');
            return  redirect()->route('login');
        }
    }

    public function traningBuy(Request $request)
    {
        $traning = Traning::findOrFail($request->traning_id);
        if ($traning->price == $request->input('pay_balance')){
            $order = AllOrder::create([
                'order_type'=>'traning',
                'order_type_id'=>$traning->id,
                'order_id'=>'Th-'.Str::random(5),
                'users_id'=>$request->input('user_id'),
                'pay_balance'=>$request->input('pay_balance'),
                'payment_method'=>$request->input('payment_method'),
                'sended_number'=>$request->input('sended_number'),
                'transaction_id'=>$request->input('transaction_id'),
                'message'=>$request->input('message'),
            ]);
            toast('Your Traning Order Success..... :)','success');
            return redirect()->route('order-success',$order->id);

        }else if($traning->price > $request->input('pay_balance')){
            toast('Paid less than the value','info');
            return redirect()->back();
        }else if($traning->price < $request->input('pay_balance')){
            toast('Paid more than the price','info');
            return redirect()->back();
        }else{
            toast('Anything Wrong.Please Try Again.:(','error');
            return redirect()->back();
        }
    }

    public function aboutUs()
    {
        return view('frontend.pages.about.about_us');    }

    public function contract()
    {
        return view('frontend.pages.contract.contract');
    }
}
