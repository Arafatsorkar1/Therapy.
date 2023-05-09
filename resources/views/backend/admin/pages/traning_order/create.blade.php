@extends('backend.admin.layout.app')
@section('title','Traning Order')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add a new traning</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Traning Create</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.traning.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Traning Category</label>
                                        <div class="col-sm-10">
                                            <select name="traning_categories_id" class="form-control @error('traning_categories_id') is-invalid @enderror"  id="traning_categories_id">
                                                <option value="null">Select Category</option>
                                            @foreach($t_category as $category)
                                                    <option value="{{ optional($category)->id }}">{{ optional($category)->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('traning_categories_id')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Traning Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Traning Title">
                                            @error('title')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Traning Sub Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title_sub" value="{{ old('title_sub') }}" class="form-control @error('title_sub') is-invalid @enderror" placeholder="Traning Sub Title">
                                            @error('title_sub')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Traning Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" placeholder="Traning Image">
                                            @error('image')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Traning Price</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror" placeholder="Traning Price">
                                            @error('price')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Traning Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" rows="4">{{  old('description') }}</textarea>
                                            @error('description')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
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
