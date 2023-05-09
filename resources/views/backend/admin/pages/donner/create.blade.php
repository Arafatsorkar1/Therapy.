@extends('backend.admin.layout.app')
@section('title','Donner Create')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Donner Create</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Donner Create</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.donner.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Donner Name">
                                            @error('name')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Donner Pic</label>
                                        <div class="col-sm-10">
                                            <small>Image Size Must Be ( 150 * 150 )</small>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Donner Pic">
                                            @error('image')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone Number<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="number" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number">
                                            @error('phone')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Date<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="date" name="donate_date" value="{{ old('donate_date') }}" class="form-control @error('donate_date') is-invalid @enderror" placeholder="Donate Date">
                                            @error('donate_date')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" rows="4">{!! old('short_description') !!}</textarea>
                                            @error('short_description')
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
