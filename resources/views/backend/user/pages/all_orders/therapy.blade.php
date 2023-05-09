@extends('backend.user.layouts.app')
@section('userContent')
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('backend.user.includes.order_tabs')
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
                                                            <th>Pay</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($assessment_orders as $order)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td><a href="{{ route('admin.all-order.show',$order->id ?? '') }}">
                                                                        {{ $order->order_id ?? '' }}
                                                                    </a>
                                                                </td>
                                                                <td>{{ Str::limit($order->category->name,20) ?? '' }}</td>
                                                                <td>{{ Str::limit($order->user->name,20) ?? '' }}</td>
                                                                <td>{{ $order->pay_balance }}</td>
                                                                <td>
                                                                    <a href="" class="btn btn-primary btn-sm">View</a>
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
@endsection
