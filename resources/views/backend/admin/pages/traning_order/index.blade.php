@extends('backend.admin.layout.app')
@section('title','All Traning Orders')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Categories</a></li>
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
                                <h4 class="card-title d-inline">All Traning <span class="badge badge-pill badge-info">{{ $orders->count() }}</span></h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#Order Id</th>
                                        <th>User</th>
                                        <th>Traning</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $key => $order)
                                        <tr>
                                            <td>#{{ $order->order_id }}</td>
                                            <td>
{{--                                                <img src="{{ asset($order->user->image) }}" class=" rounded-circle mr-3" style="width: 30px;height: 30px;" alt="">--}}
                                                {{ optional($order->user)->name }}
                                            </td>
                                            <td>
                                                <img src="{{ asset($order->traning->image) }}" class=" rounded-circle mr-3" style="width: 30px;height: 30px;" alt="">
                                                {{ optional($order->traning)->title }}
                                            </td>

                                            <td>{{ optional($order->traning)->price }}</td>

                                            <td>
                                                @if($order->status == 1)
                                                    <a href="">
                                                        <span class="badge badge-pill badge-success text-white font-weight-bold">Verified</span>
                                                    </a>
                                                @else
                                                    <a href="">
                                                        <span class="badge badge-pill badge-danger text-white font-weight-bold">Not Verified</span>
                                                    </a>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('admin.traning-order.show',$order->id) }}">
                                                    <span class="btn btn-primary rounded-full btn-sm"><i class="fa fa-eye"></i></span>
                                                </a>
{{--                                                <a href="{{route('admin.traning.edit',$traning->id)}}" class="btn btn-success btn-sm text-white">Edit</a>--}}
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
