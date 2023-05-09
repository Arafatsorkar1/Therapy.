@extends('backend.admin.layout.app')
@section('title','Edit Sub Category')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Sub Category</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sub Category Edit</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.sub-category.update',$subCategory->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="categories_id" class="form-control">
                                                <option>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option {{ $category->id == $subCategory->categories_id ? 'selected' : '' }} value="{{ optional($category)->id }}">{{ optional($category)->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ $subCategory->name }}" name="name" class="form-control" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Order</label>
                                        <div class="col-sm-10 input-group">
                                            <input type="number" name="order" value="{{ $subCategory->order }}" class="form-control" placeholder="Order Number">
                                            <div class="input-group-append">
                                                <span class="input-group-text" data-placement="left" data-toggle="popover" data-content="Order Category Use Order Number">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-dark">Submit</button>
                                        </div>
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
