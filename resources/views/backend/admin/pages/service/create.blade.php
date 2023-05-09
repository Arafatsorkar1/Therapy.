@extends('backend.admin.layout.app')
@section('title','Service Create')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Service Create</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Service Create</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Test Title">
                                            @error('title')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Service Image</label>
                                        <div class="col-sm-10">
                                            <small>Image Size Must Be ( 350 * 250 )</small>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Test Image">
                                            @error('image')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="price" value="{{ $test->price ?? old('price') }}" class="form-control @error('price') is-invalid @enderror" placeholder="Price">
                                            @error('price')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Ordering Serial Number</label>
                                        <div class="col-sm-10 input-group">
                                            <input type="number" name="serial" value="{{ $test->serial ?? old('serial') }}" class="form-control" placeholder="Serial Number">
                                            <div class="input-group-append">
                                                <span class="input-group-text" data-placement="left" data-toggle="popover" data-content="Order Category Use Order Number">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                            </div>
                                            @error('serial')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Long Description<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="7">{!!  $test->description ?? old('description') !!}</textarea>
                                            @error('description')
                                            <small>{{ $message }}</small>
                                            @enderror
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
@section('script')
    <script>
        const description = document.querySelector( '#description' );
        ClassicEditor
            .create(description)
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
