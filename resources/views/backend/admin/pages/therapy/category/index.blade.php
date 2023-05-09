@extends('backend.admin.layout.app')
@section('title','Language Therapy Category')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Language Therapy Category</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Language Therapy Category- ({{ $categories->count() }})</h4>
                            <a href="{{ route('admin.language-therapy-category.create') }}" class="btn btn-primary btn-sm text-white float-right">Add New Category</a>
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
                                    @foreach($categories as $key => $category)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>
                                            <td>{{ Str::limit($category->name,25) ?? '' }}</td>
                                            <td>{!! Str::words($category->short_description,30) ?? '' !!}</td>
                                            <td>
                                                <a href="{{route('admin.language-therapy-category.edit',$category->id ?? '') }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="event.preventDefault();document.getElementById('deleteForm{{$category->id}}').submit();">Delete</a>
                                                <form id="deleteForm{{$category->id}}" action="{{ route('admin.language-therapy-category.destroy',$category->id) }}" method="post">
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
