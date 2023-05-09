<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use App\Models\LanguageCategory;
use App\Models\LanguageTherapy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LanguageTherapyController extends Controller
{
    public function allLanguageTherapy()
    {
        $therapies = LanguageTherapy::where('status',1)->orderBy('serial','DESC')->paginate(20);
        return view('frontend.pages.language_therapy.all_language_therapy',compact('langs'));
    }

    public function therapy($slug)
    {
        $category =  LanguageCategory::where('slug',$slug)->first();
        $therapies =  LanguageTherapy::where('language_categories_id',$category->id)->where('status',1)->orderBy('serial','DESC')->paginate(26);
        $latest_therapies = LanguageTherapy::where('status',1)->orderBy('created_at','DESC')->get();
        return view('frontend.pages.language_therapy.therapy',compact('therapies','category','latest_therapies'));
    }

    public function singleTherapy($slug)
    {
        $category =  LanguageCategory::where('slug',$slug)->first();
        $categories = LanguageCategory::where('status',1)->orderBy('created_at','ASC')->get();
        $latest_therapies = LanguageTherapy::where('status',1)->orderBy('created_at','DESC')->get();
        $therapy =  LanguageTherapy::with(['user','category'])->where('slug',$slug)->first();
        return view('frontend.pages.language_therapy.single_therapy',compact('therapy','category','latest_therapies','categories'));
    }

    public function orderTherapy($slug)
    {
        $therapy = LanguageTherapy::where('slug',$slug)->first();
        $user =  auth()->user();
        if ($user->type == 'admin'){
            toast('Admin Dont Buy Any Test..... :(','warning');
            return redirect()->back();
        }elseif ($user->type == 'user'){
            return view('frontend.pages.language_therapy.order_therapy',compact('therapy','user'));
        }else{
            toast('Access Denied..... :(','error');
            return redirect()->back();
        }
    }

    public function therapyOrder(Request $request)
    {
        $therapy = LanguageTherapy::findOrFail($request->therapy_id);
        if ($therapy->price == $request->input('pay_balance')){
            $order = AllOrder::create([
                'order_type'=>'therapy',
                'order_type_id'=>$therapy->id,
                'order_id'=>'Th-'.Str::random(5),
                'users_id'=>$request->input('user_id'),
                'pay_balance'=>$request->input('pay_balance'),
                'payment_method'=>$request->input('payment_method'),
                'sended_number'=>$request->input('sended_number'),
                'transaction_id'=>$request->input('transaction_id'),
                'message'=>$request->input('message'),
            ]);

            toast('Your Therapy Order Success..... :)','success');
            return  redirect()->route('order-success',$order->id);

        }else if($therapy->price > $request->input('pay_balance')){
            toast('Paid less than the value','info');
            return redirect()->back();
        }else if($therapy->price < $request->input('pay_balance')){
            toast('Paid more than the price','info');
            return redirect()->back();
        }else{
            toast('Anything Wrong.Please Try Again.:(','error');
            return redirect()->back();
        }
    }
}
