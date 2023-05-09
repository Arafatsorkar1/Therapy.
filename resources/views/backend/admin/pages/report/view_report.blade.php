@extends('backend.admin.layout.app')
@section('title','View Report')
@section('css')
    <style>
        .unique-id{
            border: 1px solid black;
            background: gray;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">View Report</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                    <a href="{{ route('admin.report.download',$print_report->id) }}" class="btn btn-success text-white float-right">Download Report</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="font-weight-bold text-uppercase">{{ get_setting('institute_name') }}</h1>
                                <h4 class="text-capitalize">{{ get_setting('institute_slogan') }}</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="" style="width: 150px;height: 150px;overflow: hidden;">
                                        <img src="{{ get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('images/default.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mt-3 display-4 bg-warning p-2 text-center font-weight-bold">Assessment Report</h1>
                                </div>
                                <div class="col-md-3">
                                    <div class="" style="width: 171px;height: 208px;overflow: hidden;box-shadow: 0 0 3px 1px;border: 1px solid #e9e9e9;">
                                        <img src="{{ asset($print_report->user->image) ?? asset('/images/default.jpg') }}" style="width: 100%;height: 100%;object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <span style="border: 1px solid black;
            background: gray;
            font-weight: bold;
            border-radius: 5px;" class="unique-id mx-2 d-inline-block p-2  font-weight-bold text-white mb-3">Id : {{$print_report->r_unique_id}}</span>
                                    <h5>Branch Name : {{ get_setting('branch_name') }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Name : {{ $print_report->user->name ?? 'Name' }} </th>
                                            <th>DOB : {{ $print_report->user->dob ?? now() }} </th>
                                            <th>Age : {{ $print_report->user->age ?? 'Age' }} </th>
                                            <th>Sex : {{ $print_report->user->sex ?? 'Gender' }} </th>
                                            <th>Date : {{$print_report->report_created_date}} </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Background</th>
                                            <td>{{ $print_report->background ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Assessment Method</th>
                                            <td>{{ $print_report->assessment_method ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Areas Of Strength</th>
                                            <td>{{ $print_report->areas_strength ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Areas Of Difficulty</th>
                                            <td>{{ $print_report->areas_difficulty ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Challenging Issue</th>
                                            <td>{{ $print_report->challenging_issue ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Learning Tend</th>
                                            <td>{{ $print_report->learning_tend ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Cognitive Biased</th>
                                            <td>{{ $print_report->cognitive_biased ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Goals Focus On</th>
                                            <td>{{ $print_report->goals_focus_on ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Findings & Diagnosis On</th>
                                            <td>{{ $print_report->findings_diagnosis ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Estimate Severity</th>
                                            <td>{{ $print_report->estimate_severity ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Estimate Prognosis</th>
                                            <td>{{ $print_report->estimate_prognosis ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="" style="font-weight: bold;">Recommendations</th>
                                            <td>{{ $print_report->recommendations ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="" style="font-weight: bold;">Direct Treatment</th>
                                            <td>{{ $print_report->direct_treatment ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="" style="font-weight: bold;">Home Based Treatment</th>
                                            <td>{{ $print_report->home_based_treatment ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="" style="font-weight: bold;">Referred to</th>
                                            <td>{{ $print_report->referred_to ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="" style="font-weight: bold;">Others Comment</th>
                                            <td>{{ $print_report->others_comment ?? '' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
