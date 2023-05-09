@extends('backend.admin.layout.app')
@section('title','Edit Language Therapy Category')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Audiological Test</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Audiological Test</h4>
                            <div class="basic-form">



                                    <form action="{{ route('admin.language-therapy-category.update',$languageCategory->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="{{ $languageCategory->name ?? old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Category Name">
                                                @error('name')
                                                <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ordering Serial Number</label>
                                            <div class="col-sm-10 input-group">
                                                <input type="number" name="serial" value="{{ $languageCategory->serial ?? old('serial') }}" class="form-control" placeholder="Serial Number">
                                                <div class="input-group-append">
                                                <span class="input-group-text" data-placement="left" data-toggle="popover" data-content="Order Category Use Order Number">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                                </div>
                                                @error('name')
                                                <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" id="short_description" rows="7">{!!  $languageCategory->short_description ?? old('short_description') !!}</textarea>
                                                @error('short_description')

                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-dark">Update</button>
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
