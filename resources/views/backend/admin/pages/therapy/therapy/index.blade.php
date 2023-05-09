@extends('backend.admin.layout.app')
@section('title','Language Therapy')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Language Therapy</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Language Therapy- ({{ $therapys->count() }})</h4>
                            <a href="{{ route('admin.language-therapy.create') }}" class="btn btn-primary btn-sm text-white float-right">Add New Therapy</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($therapys as $key => $therapy)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="fit">
                                                    <img class="fit-image" src="{{ $therapy->image? asset($therapy->image) : asset('images/default.jpg') }}" alt="">
                                                </div>
                                            </td>
                                            <td>{{ Str::limit($therapy->title,25) ?? '' }}</td>
                                            <td>{!! Str::words($therapy->description,30) ?? '' !!}</td>
                                            <td>
                                                <a href="{{ route('admin.language-therapy.edit',$therapy->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$therapy->id}})">Delete</a>
                                                <form id="deleteForm{{$therapy->id}}" action="{{ route('admin.language-therapy.destroy',$therapy->id) }}" method="post">
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
                                        <th>Name</th>
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
