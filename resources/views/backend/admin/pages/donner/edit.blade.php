@extends('backend.admin.layout.app')
@section('title','Edit Audiological Test')
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
                                <form action="{{ route('admin.donner.update',$donner->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{ $donner->name ?? old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Category Name">
                                            @error('title')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Donner Pic</label>
                                        <div class="col-sm-8">
                                            <small>Image Size Must Be ( 350 * 250 )</small>
                                            <input type="file" name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" placeholder="Donner Image">
                                            @error('image')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="fit">
                                            <img class="fit-image" src="{{ $donner->image ? asset($donner->image) : asset('images/default.jpg') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone Number<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="number" name="phone" value="{{ $donner->phone ?? old('phone') }}" class="form-control @error('price') is-invalid @enderror" placeholder="Donner Number">
                                            @error('price')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Date<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="date" name="donate_date" value="{{$donner->donate_date ?? old('donate_date') }}" class="form-control @error('donate_date') is-invalid @enderror" placeholder="Donate Date">
                                            @error('donate_date')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Long Description<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" id="description" rows="7">{!!  $donner->short_description ?? old('short_description') !!}</textarea>
                                            @error('description')
                                            <small>{{ $message }}</small>
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
