@extends('backend.admin.layout.app')
@section('title','Edit Traning Category')
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
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Category Types</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Type Name</th>
                                        <th>Order Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($traning_categories as $key => $category)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>`
                                            <td>{{optional($category)->name}}</td>
                                            <td>
                                                @if(optional($category)->status == 1)
                                                    <span class="badge badge-success text-white badge-pill">Published</span>
                                                @else
                                                    <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.traning-category.edit',$category->id)}}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$category->id}})">Delete</a>
                                                <form id="deleteForm{{$category->id}}" action="{{ route('admin.traning-category.destroy',$category->id) }}" method="post">
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
                                        <th>Type Name</th>
                                        <th>Order Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.traning-category.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{ old('name')  }}" class="@error('name') is-invalid @enderror form-control input-default" placeholder="Category Type Name" required>
                                        @error('name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-dark" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
