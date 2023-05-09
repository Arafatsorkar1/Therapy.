<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use App\Models\AssessmentOrder;
use App\Models\Category;
use App\Models\TraningOrder;
use App\Models\UserAssessment;
use App\Notifications\OrderNotifaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AssessmentController extends Controller
{
    public function singleAssisment($slug)
    {
        $category =  Category::with(['subCategories','subCategories.answers','subCategories.questions'])->where('slug',$slug)->first();
        return view('frontend.pages.assessment.single_assessment',compact('category'));
    }

    public function submitAssessment(Request $request)
    {
        if (Auth::check()){
            if (Auth::user()->type == 'user'){
                $sum = 0;
                $data = $request->except('_token','categories_id');
                foreach ($data as $key => $value) {
                    $sum = $sum + $value;
                }
//                $user_assessment =  $userAssessment = UserAssessment::create([
//                    'users_id'=>Auth::id(),
//                    'categories_id'=>$request->input('categories_id'),
//                    'total_mark'=>$sum,
//                    'status'=>'pending',
//                ]);

                $data = [
                    'users_id'=>Auth::id(),
                    'categories_id'=>$request->input('categories_id'),
                    'total_mark'=>$sum,
                    'status'=>'pending',
                ];
                $category = Category::findOrFail($request->input('categories_id'));
                Session::put('userAssessment',$data);
                return view('frontend.pages.assessment.buy_assessment',compact('category'));
            }else{
                toast('Admin Dont Submit Any Assessment','warning');
                return redirect()->back();
            }
        }else{
            toast('Please Login First For Submit The Assessment','warning');
            return redirect()->route('login');
        }
    }

    public function assessmentBuy(Request $request)
    {
        $this->validate($request,[
            'pay_balance'=>'required',
            'payment_method'=>'required',
            'sended_number'=>'required',
            'transaction_id'=>'required'
        ]);

        $userAssessment = Session::get('userAssessment');
        if ($userAssessment){
//            $order = AllOrder::create([
//                'order_id'=>Str::random(5),
//                'categories_id'=>$userAssessment['categories_id'],
//                'users_id'=>auth()->id(),
//                'total_mark'=>$userAssessment['total_mark'],
//                'pay_balance'=>$request->input('pay_balance'),
//                'payment_method'=>$request->input('payment_method'),
//                'sended_number'=>$request->input('sended_number'),
//                'transaction_id'=>$request->input('transaction_id'),
//                'message'=>$request->input('message'),
//                'status'=>0,
//            ]);

            if ($request->input('price') == $request->input('pay_balance')){
                $order = AllOrder::create([
                    'order_type'=>'assessment',
                    'order_type_id'=>$userAssessment['categories_id'],
                    'total_mark'=>$userAssessment['total_mark'],
                    'order_id'=>'Th-'.Str::random(5),
                    'users_id'=>auth()->id(),
                    'pay_balance'=>$request->input('pay_balance'),
                    'payment_method'=>$request->input('payment_method'),
                    'sended_number'=>$request->input('sended_number'),
                    'transaction_id'=>$request->input('transaction_id'),
                    'message'=>$request->input('message'),
                ]);
                toast('Your Assessment Order Success..... :)','success');
                return redirect()->route('order-success',$order->id);
                //$user =  Auth::user();
                //$assessment = AssessmentOrder::with('category')->findOrFail($order->id);
                //Notification::send($user,new OrderNotifaction($assessment));

            }else if($request->input('price') > $request->input('pay_balance')){
                toast('Paid less than the value','info');
                return redirect()->back();
            }else if($request->input('price') < $request->input('pay_balance')){
                toast('Paid more than the price','info');
                return redirect()->back();
            }else{
                toast('Anything Wrong.Please Try Again.:(','error');
                return redirect()->back();
            }
        }else{
            toast('Not Valide Request......... :(','error');
            return  redirect()->route('home');
        }

    }

    public function orderSuccess($id)
    {
        $order =  AllOrder::findOrFail($id);
        return view('frontend.pages.buy_now.buy_success',compact('order'));
    }
}
