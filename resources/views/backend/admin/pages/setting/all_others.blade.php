@extends('backend.admin.layout.app')
@section('title','Setting')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Institute Basic Setting</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Donner Content</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="types[]" value="donner_content">
                                            <textarea class="form-control" name="donner_content" id="donner_content" rows="10">{{ get_setting('donner_content') ?? '' }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for=""></label>
                                        </div>
                                        <div class="col-md-8">
                                            <button class="btn btn-dark">Submit</button>
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
        const donner_content = document.querySelector( '#donner_content' );
        ClassicEditor
            .create(donner_content)
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
