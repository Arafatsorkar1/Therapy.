@extends('backend.admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Categroy Add</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.category.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Type <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="category_types_id" class="form-control">
                                                <option>Select Category Type</option>
                                                @foreach($category_types as $type)
                                                    <option value="{{ optional($type)->id }}">{{ optional($type)->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Order</label>
                                        <div class="col-sm-10 input-group">
                                            <input type="number" name="order" class="form-control" placeholder="Order Number">
                                            <div class="input-group-append">
                                                <span class="input-group-text" data-placement="left" data-toggle="popover" data-content="Order Category Use Order Number">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
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
