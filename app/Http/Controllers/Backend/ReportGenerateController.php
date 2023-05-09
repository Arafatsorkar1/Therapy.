<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AllOrder;
use App\Models\AssessmentOrder;
use App\Models\Category;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ReportGenerateController extends Controller
{
    public function index($id)
    {

        $assessment_order =  AllOrder::with(['user'])->findOrFail($id);
        $assessment_name =  Category::findOrFail($assessment_order->order_type_id);
        //$assessment = AssessmentOrder::with(['user','category'])->findOrFail($id);
        //$user =  User::findOrFail($id);
        $r_unique_id = 'Th-'.date('s').rand(11111,99999);
        return view('backend.admin.pages.report.index',compact('assessment_order','assessment_name','r_unique_id'));
    }

    public function store(Request $request)
    {

        $report = Report::create([
            'users_id'=>$request->input('users_id') ?? null,
            'orders_id'=>$request->input('orders_id') ?? null,
            'r_unique_id'=>$request->input('r_unique_id') ?? null,
            'report_created_date'=>$request->input('report_created_date') ?? now(),
            'background'=>$request->input('background') ?? '',
            'assessment_method'=>$request->input('assessment_method') ?? '',
            'areas_strength'=>$request->input('areas_strength') ?? '',
            'areas_difficulty'=>$request->input('areas_difficulty') ?? '',
            'challenging_issue' => $request->input('challenging_issue') ?? '',
            'learning_tend'=>$request->input('learning_tend') ?? '',
            'cognitive_biased'=>$request->input('cognitive_biased') ?? '',
            'goals_focus_on'=>$request->input('goals_focus_on') ?? '',
            'findings_diagnosis'=>$request->input('findings_diagnosis') ?? '',
            'estimate_severity'=>$request->input('estimate_severity') ?? '',
            'estimate_prognosis'=>$request->input('estimate_prognosis') ?? '',
            'recommendations'=>$request->input('recommendations') ?? '',
            'direct_treatment'=>$request->input('direct_treatment') ?? '',
            'home_based_treatment'=>$request->input('direct_treatment') ?? '',
            'referred_to'=>$request->input('direct_treatment') ?? '',
            'others_comment'=>$request->input('others_comment') ?? '',
        ]);

        return redirect()->route('admin.report.show',$report->id);
    }

    public function show($id)
    {
        $print_report =  Report::with(['user','allOrder','allOrder.category'])->findOrFail($id);
        return view('backend.admin.pages.report.view_report',compact('print_report'));
    }

    public function reportDownload($id)
    {
        $print_report =  Report::with(['user','allOrder','allOrder.category'])->findOrFail($id);
        return view('backend.admin.pages.report.download_report',compact('print_report'));
    }
}






























