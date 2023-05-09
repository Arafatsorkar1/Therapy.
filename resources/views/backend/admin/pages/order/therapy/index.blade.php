@extends('backend.admin.layout.app')
@section('title','All Answers')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Answers</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @include('backend.admin.component.all_order_tabs')
                            <div class="tab-content br-n pn">
                                <div id="navpills-1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="">
                                                        <h4 class="card-title d-inline">All Orders <span class="badge badge-pill badge-info"></span></h4>
                                                        {{--                                                        <a href="{{ route('admin.answer.create') }}" class="btn btn-primary float-right text-white">Add Answer</a>--}}
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered zero-configuration">
                                                            <thead>
                                                            <tr>
                                                                <th>#SL</th>
                                                                <th>Order Id</th>
                                                                <th>Assessment</th>
                                                                <th>User Name</th>
                                                                <th>Price</th>
                                                                <th>Pay</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($therapy_orders as $order)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td><a href="{{ route('admin.all-order.show',$order->id ?? '') }}">
                                                                            {{ $order->order_id ?? '' }}
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ Str::limit($order->orderTherapy->title,20) ?? '' }}</td>
                                                                    <td>{{ Str::limit($order->user->name,20) ?? '' }}</td>
                                                                    <td>{{ $order->orderTherapy->price }}</td>
                                                                    <td>{{ $order->pay_balance }}</td>
                                                                    <td>
                                                                        <a href="{{ route('admin.all-order.show',$order->id ?? '') }}" class="btn btn-primary btn-sm">View</a>
                                                                        <a href="{{ route('admin.generate-report.index',$order->id ?? '') }}" class="btn btn-success btn-sm text-white">Report</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>#SL</th>
                                                                <th>Order Id</th>
                                                                <th>Assessment</th>
                                                                <th>User Name</th>
                                                                <th>Pay</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
