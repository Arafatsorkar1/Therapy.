@extends('backend.admin.layout.app')
@section('title','Website Setting')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Website Basic Setting</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Website Setting</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Website Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="website_name">
                                            <input type="text" class="form-control" placeholder="Website Name" name="website_name" value="{{ get_setting('website_name') }}">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.website-icon') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Website Icon</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="types[]" value="website_icon">
                                            <input type="file" class="form-control" placeholder="Website Icon" name="website_icon">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <div class="card-img-top" style="width: 65px;height: 65px;border-radius: 50px;overflow: hidden;margin: 0 auto;">
                                                    <img class="img-fluid" style="width: 100%;height: 100%;object-fit: cover;" src="{{ get_setting('website_icon') ? asset(get_setting('website_icon')) : asset('images/default.jpg')  }}" alt="">
                                                </div>
                                            </div>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.website-logo') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Website Logo</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="types[]" value="website_logo">
                                            <input type="file" class="form-control" placeholder="Website Logo" name="website_logo">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <div class="card-img-top" style="width: 65px;height: 65px;border-radius: 50px;overflow: hidden;margin: 0 auto;">
                                                    <img class="img-fluid" style="width: 100%;height: 100%;object-fit: cover;" src="{{ get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('images/default.jpg')  }}" alt="">
                                                </div>
                                            </div>
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
