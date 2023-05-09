@extends('backend.admin.layout.app')
@section('title','Report')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Report</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <form action="{{ route('admin.submit-report.store') }}" method="post" enctype="multipart/form-data" class="row">
                @csrf
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
                                        <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('images/default.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mt-3 display-4 bg-warning p-2 text-center font-weight-bold">Assessment Report</h1>
                                </div>
                                <div class="col-md-3">
                                    <div class="" style="width: 171px;height: 208px;overflow: hidden;box-shadow: 0 0 3px 1px;border: 1px solid #e9e9e9;">
                                        <img src="{{ asset($assessment_order->user->image) ?? asset('/images/default.jpg') }}" style="width: 100%;height: 100%;object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <span class="mx-2 d-inline-block p-2 bg-info rounded-md font-weight-bold text-white mb-3">Id : {{$r_unique_id}}</span>
                                    <h5>Branch Name : {{ get_setting('branch_name') }}</h5>
                                </div>
                            </div>
                            @php
                                $now_date = now();
                            @endphp
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Name : {{ $assessment_order->user->name ?? 'Name' }} </th>
                                            <th>DOB : {{ $assessment_order->user->dob ?? now() }} </th>
                                            <th>Age : {{ $assessment_order->user->age ?? 'Age' }} </th>
                                            <th>Sex : {{ $assessment_order->user->sex ?? 'Gender' }} </th>
                                            <th>Date : {{ $now_date }} </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                   <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Background</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="background" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="background" class="form-control" value="{{ old('background') ?? '' }}" placeholder="">
                                           <input type="hidden" name="users_id" value="{{ $assessment_order->user->id ?? null }}">
                                           <input type="hidden" name="orders_id" value="{{ $assessment_order->id ?? null }}">
                                           <input type="hidden" name="r_unique_id" value="{{ $r_unique_id ?? null }}">
                                           <input type="hidden" name="report_created_date" value="{{ $now_date ?? now() }}">
                                       </div>
                                   </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Assessment Method</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="assessment_method" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="assessment_method" class="form-control" value="{{ old('assessment_method') ?? '' }}" placeholder="">
                                       </div>
                                   </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Areas Of Strength</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="areas_strength" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="areas_strength" class="form-control" value="{{ old('areas_strength') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Areas Of Difficulty</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="areas_difficulty" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="areas_difficulty" class="form-control" value="{{ old('areas_difficulty') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Challenging Issue</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="areas_difficulty" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="challenging_issue" class="form-control" value="{{ old('challenging_issue') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Learning Tend</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="areas_difficulty" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="learning_tend" class="form-control" value="{{ old('learning_tend') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Cognitive Biased</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="areas_difficulty" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="cognitive_biased" class="form-control" value="{{ old('cognitive_biased') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Goals Focus On</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="goals_focus" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="goals_focus_on" class="form-control" value="{{ old('goals_focus_on') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Findings & Diagnosis</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="goals_focus" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="findings_diagnosis" class="form-control" value="{{ old('findings_diagnosis') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Estimate Severity</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="goals_focus" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="estimate_severity" class="form-control" value="{{ old('estimate_severity') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4>Estimate Prognosis</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="goals_focus" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="estimate_prognosis" class="form-control" value="{{ old('estimate_prognosis') ?? '' }}" placeholder="">
                                       </div>
                                    </div>

                                    <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                           <h4 class="font-weight-bold">Recommendations</h4>
                                       </div>
                                       <div class="col-md-8">
{{--                                           <select name="goals_focus" id="" class="form-control">--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                               <option value="">Option One</option>--}}
{{--                                           </select>--}}
                                           <input type="text" name="recommendations" class="form-control" value="{{ old('recommendations') ?? '' }}" placeholder="">
                                       </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 text-center">
                                            <h4>Direct Treatment</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="direct_treatment" value="{{ old('direct_treatment') ?? '' }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 text-center">
                                            <h4>Group Treatment</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="direct_treatment" value="{{ old('direct_treatment') ?? '' }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 text-center">
                                            <h4>Home Based Treatment</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="home_based_treatment" value="{{ old('home_based_treatment') ?? ''}}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 text-center">
                                            <h4>Referred to</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="referred_to" value="{{ old('referred_to') }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 text-center">
                                            <h4>Others Comment</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="others_comment" class="form-control" rows="4">{{ old('others_comment') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                               <div class="col-md-12">
                                   <div class="row mb-3">
                                       <div class="col-md-4 text-center">
                                       </div>
                                       <div class="col-md-8">
                                           <button class="btn btn-success text-white" type="submit">Generate Report</button>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- #/ container -->
    </div>
@endsection
