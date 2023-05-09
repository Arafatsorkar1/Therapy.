<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .page {
            width: 8.3in;
            height: 12in;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
            border: 1px solid black;
        }
        .unique-id{
            border: 1px solid black;
            background: gray;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
</head>
<body onload="window.print();">

<div class="page">
    <div class="">
        <div class="header text-center">
            <h2 class="text-uppercase" style="font-weight: bold;">{{ get_setting('institute_name') }}</h2>
            <h4 class="text-capitalize">{{ get_setting('institute_slogan') }}</h4>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="" style="width: 25%;">
            <div class="" style="width: 150px;height: 150px;overflow: hidden;">
                <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('images/default.jpg') }}" alt="">
            </div>
        </div>
        <div class="" style="width: 50%;">
            <div class="" style="padding: 15px 10px;background-color: #f29d56 !important;">
                <h1 style="text-align: center;">Assessment Report</h1>
            </div>
        </div>
        <div class="" style="width: 25%;">
            <div class="" style="width: 171px;height: 208px;overflow: hidden;border: 1px solid #e9e9e9;">
                <img src="{{ asset($print_report->user->image) ?? asset('/images/default.jpg') }}" style="width: 100%;height: 100%;object-fit: contain;" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <span class="unique-id mx-2 d-inline-block p-2 rounded-md font-weight-bold text-white mb-3">Id : {{$print_report->r_unique_id}}</span>
        <h5>Branch Name : {{ get_setting('branch_name') }}</h5>
    </div>
    <div class="row" style="margin-top: 20px;">
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


















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
