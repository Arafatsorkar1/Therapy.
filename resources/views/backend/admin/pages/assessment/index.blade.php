@extends('backend.admin.layout.app')
@section('title','All Assessment Orders')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Assessment Orders</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <h4 class="card-title d-inline">All Orders Assessment <span class="badge badge-pill badge-info">{{ $orders->count() }}</span></h4>
{{--                                <a href="{{ route('admin.traning.create') }}" class="btn btn-success shadow float-right text-white">Add Traning</a>--}}
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Order Id</th>
                                        <th>Assessment Name</th>
                                        <th>User</th>
                                        <th>Total Number</th>
                                        <th>Price</th>
                                        <th>Sended Number</th>
                                        <th>TransactionId</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $key => $order)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>`
                                            <td>{{optional($order)->order_id}}</td>
                                            <td>{{optional($order->category)->name}}</td>
                                            <td>
                                                <a href="{{ route('admin.user.show',optional($order->user)->id) }}">{{optional($order->user)->name}}</a>
                                            </td>
                                            <td>{{optional($order)->total_mark}}</td>
                                            <td>{{optional($order)->pay_balance}}</td>
                                            <td>{{optional($order)->sended_number}}</td>
                                            <td>{{optional($order)->transaction_id}}</td>
                                            <td>
                                                @if(optional($order)->payment_method == 'bkash')
                                                    <img src="{{asset('/images/')}}" class=" rounded-circle mr-3" alt="bkash">
                                                @elseif(optional($order)->payment_method == 'rocket')
                                                    <img src="{{asset('/images/')}}" class=" rounded-circle mr-3" alt="rocket">
                                                @else
                                                    <img src="{{asset('/images/')}}" class=" rounded-circle mr-3" alt="nogod">
                                                @endif
                                            </td>
                                            <td>
                                                @if(optional($order)->status == 1)
                                                    <a href="">
                                                        <span class="badge badge-success text-white badge-pill">Verified</span>
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.assessment-order-verifi',$order->id) }}">
                                                        <span class="badge badge-warning text-white badge-pill">Not Verified</span>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.generate-report.index',optional($order->user)->id) }}" class="btn btn-success btn-sm text-white">Report</a>
{{--                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$traning->id}})">Delete</a>--}}
{{--                                                <form id="deleteForm{{$traning->id}}" action="{{ route('admin.traning.destroy',$traning->id) }}" method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                </form>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Order Id</th>
                                        <th>Assessment Name</th>
                                        <th>User</th>
                                        <th>Total Number</th>
                                        <th>Price</th>
                                        <th>Sended Number</th>
                                        <th>TransactionId</th>
                                        <th>Status</th>
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
        <!-- #/ container -->
    </div>
@endsection
