@extends('backend.admin.layout.app')
@section('title','Home Page Setting')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home Page Setting</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Home Page Setting</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Home Page Title</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="home_page_title">
                                            <input type="text" class="form-control" placeholder="Title" name="home_page_title" value="{{ get_setting('home_page_title') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Home Page Sub Title</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="home_page_sub_title">
                                            <input type="text" class="form-control" placeholder="Sub Title" name="home_page_sub_title" value="{{ get_setting('home_page_sub_title') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Hero Description</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="hero_description">
                                            <textarea class="form-control" name="hero_description" id="" rows="4">{{ get_setting('hero_description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Redirect Link</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="hero_link">
                                            <input type="text" class="form-control" placeholder="Link" name="hero_link" value="{{ get_setting('hero_link') }}">
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
                                <form action="{{ route('admin.homepage.setting.heorimage') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Hero Image</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="types[]" value="hero_image">
                                            <input type="file" class="form-control" placeholder="Hero Image" name="hero_image" value="{{ get_setting('hero_image') }}">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="shadow">
                                                <img class="rounded-full img-fluid" src="{{ get_setting('hero_image') ? asset(get_setting('hero_image')) : asset('images/default.jpg') }}" alt="">
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
                                <form action="{{ route('admin.homepage.setting.aboutimage') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">About Image</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="types[]" value="home">
                                            <input type="file" class="form-control" placeholder="Hero Image" name="about_image" value="{{ get_setting('about_image') }}">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="shadow">
                                                <img class="rounded-full img-fluid" src="{{ get_setting('about_image') ? asset(get_setting('about_image')) : asset('images/default.jpg')}}" alt="">
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
                            <h4 class="card-title">About Us</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">About title</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="about_title">
                                            <input type="text" class="form-control" placeholder="Title" name="about_title" value="{{ get_setting('about_title') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">About description</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="about_description">
                                            <textarea class="form-control" name="about_description" id="" rows="4">{{ get_setting('about_description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Redirect Link</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="about_link">
                                            <input type="text" class="form-control" placeholder="Link" name="about_link" value="{{ get_setting('about_link') }}">
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
