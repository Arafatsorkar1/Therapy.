@extends('backend.admin.layout.app')
@section('title','All Services')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Services</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Services- ({{ $services->count() }})</h4>
                            <a href="{{ route('admin.service.create') }}" class="btn btn-primary btn-sm text-white float-right">Add New Service</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $key => $service)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="fit">
                                                    <img class="fit-image" src="{{ $service->image? asset($service->image) : asset('images/default.jpg') }}" alt="{{ $service->title }}">
                                                </div>
                                            </td>
                                            <td>{{ $service->price ?? 0 }}</td>
                                            <td>{{ Str::limit($service->title,25) ?? '' }}</td>
                                            <td>{!! Str::words($service->description,30) ?? '' !!}</td>
                                            <td>
                                                <a href="{{ route('admin.service.edit',$service->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$service->id}})">Delete</a>
                                                <form id="deleteForm{{$service->id}}" action="{{ route('admin.service.destroy',$service->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Title</th>
                                        <th>Description</th>
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
