@extends('backend.admin.layout.app')
@section('title','Create Question')
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
                            <h4 class="card-title">Add Question</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.question.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="categories_id" id="category" class="form-control">
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
                                            <select name="sub_categories_id" id="subCategory" class="form-control">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" placeholder="Category Name">
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
