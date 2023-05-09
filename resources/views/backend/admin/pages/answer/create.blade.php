@extends('backend.admin.layout.app')
@section('title','Create answer')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add a new answer</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Answer Create</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.answer.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="categories_id" id="category" required class="form-control">
                                                <option>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ optional($category)->id }}">{{ optional($category)->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sub Category <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="sub_categories_id" required id="subCategory" class="form-control">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Answer Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Answer name">
                                            @error('name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Answer Mark</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="mark" value="{{ old('mark') }}" class="form-control @error('mark') is-invalid @enderror" placeholder="Answer mark">
                                            @error('mark')
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
@section('script')
    <script>

        $('#category').on('change', function (e){
            var category_id = $(this).val();
            $.post("{{ route('admin.getSubCategory') }}",{_id:category_id},
                function(data, status){
                    console.log(data);
                    $('#subCategory').empty();
                    //$('#subCategory').append('<option value="0" selected>Select SubCategory</option>');
                    $.each(data, function (key, value) {
                        $('#subCategory').append('<option value="'+value.id+'" >'+value.name+'</option>');
                    })
                });
        })
    </script>
@endsection
