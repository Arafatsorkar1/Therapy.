@extends('backend.admin.layout.app')
@section('title','Test')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Audiological Test</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Audiological Test- ({{ $tests->count() }})</h4>
                            <a href="{{ route('admin.test.create') }}" class="btn btn-primary btn-sm text-white float-right">Add New Test</a>
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
                                    @foreach($tests as $key => $test)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="fit">
                                                    <img class="fit-image" src="{{ $test->image? asset($test->image) : asset('images/default.jpg') }}" alt="">
                                                </div>
                                            </td>
                                            <td>{{ $test->price ?? 0 }}</td>
                                            <td>{{ Str::limit($test->title,25) ?? '' }}</td>
                                            <td>{!! Str::words($test->description,30) ?? '' !!}</td>
                                            <td>
                                                <a href="{{ route('admin.test.edit',$test->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$test->id}})">Delete</a>
                                                <form id="deleteForm{{$test->id}}" action="{{ route('admin.test.destroy',$test->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
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
