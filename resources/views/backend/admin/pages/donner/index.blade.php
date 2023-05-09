@extends('backend.admin.layout.app')
@section('title','Donner List')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Donner List</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Donner List- ({{ $donners->count() }})</h4>
                            <a href="{{ route('admin.donner.create') }}" class="btn btn-primary btn-sm text-white float-right">Add New </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Phone</th>
                                        <th>Donate Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($donners as $key => $donner)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>
                                            <td>#{{ $donner->name ?? '' }}</td>
                                            <td>
                                                <div class="fit">
                                                    <img class="fit-image" src="{{ $donner->image? asset($donner->image) : asset('images/default.jpg') }}" alt="{{ $donner->slug }}">
                                                </div>
                                            </td>
                                            <td>{{ $donner->phone ?? '017 *** ** ***' }}</td>
                                            <td>{{ $donner->donate_date ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('admin.donner.edit',$donner->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$donner->id}})">Delete</a>
                                                <form id="deleteForm{{$donner->id}}" action="{{ route('admin.donner.destroy',$donner->id) }}" method="post">
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
