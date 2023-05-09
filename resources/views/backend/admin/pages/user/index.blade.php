@extends('backend.admin.layout.app')
@section('title','users')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All users</a></li>
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
                                <h4 class="card-title d-inline">All Users <span class="badge badge-pill badge-info">{{ $users->count() }}</span></h4>
{{--                                <a href="{{ route('admin.traning.create') }}" class="btn btn-success shadow float-right text-white">Add Traning</a>--}}
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User Name</th>
                                        <th>Register At</th>
                                        <th>Email</th>
                                        <th>Order Traning</th>
                                        <th>Order Assessment</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>`
                                            <td>{{$user->name}}</td>
                                            <td>{{ $user->created_at->diffForHumans() }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ optional($user->traningOrders)->count() }}</td>
                                            <td>{{ optional($user->assessmentOrders)->count() }}</td>
                                            <td>
                                                <a href="{{route('admin.user.show',$user->id)}}" class="btn btn-success btn-sm text-white">View</a>
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
                                        <th>User Name</th>
                                        <th>Register At</th>
                                        <th>Email</th>
                                        <th>Order Traning</th>
                                        <th>Order Assessment</th>
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
