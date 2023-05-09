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
                            <h4 class="card-title">Institute Setting</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Institute Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="institute_name">
                                            <input type="text" class="form-control" placeholder="Institute Name" name="institute_name" value="{{ get_setting('institute_name') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Slogan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="institute_slogan">
                                            <input type="text" class="form-control" placeholder="Institute Slogan" name="institute_slogan" value="{{ get_setting('institute_slogan') }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Branch Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="branch_name">
                                            <input type="text" class="form-control" placeholder="Branch name" name="branch_name" value="{{ get_setting('branch_name') }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for=""></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="branch_name">
                                            <input type="text" class="form-control" placeholder="Branch name" name="branch_name" value="{{ get_setting('branch_name') }}">
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
