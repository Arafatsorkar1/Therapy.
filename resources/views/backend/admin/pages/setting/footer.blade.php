@extends('backend.admin.layout.app')
@section('title','Footer Setting')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Footer Page Setting</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('admin.homepage.setting.heorimage') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Footer Logo</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="hero_image">
                                            <input type="file" class="form-control" placeholder="Hero Image" name="hero_image" value="{{ get_setting('hero_image') }}">
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
                            <h4 class="card-title">Footer Setting</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">About</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="footer_about">
                                            <textarea class="form-control" name="footer_about" id="" rows="4">{{ get_setting('footer_about') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Location</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="location">
                                            <input type="text" class="form-control" placeholder="Location" name="location" value="{{ get_setting('location') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Contract number</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="contact_number">
                                            <input type="text" class="form-control" placeholder="Contact Number" name="contact_number" value="{{ get_setting('contact_number') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="contract_email">
                                            <input type="text" class="form-control" placeholder="Email" name="contract_email" value="{{ get_setting('contract_email') }}">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Follow Us</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Facebook - <i class="fa fa-facebook"></i></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="facebook_link">
                                            <input type="url" class="form-control" placeholder="https://www.link.com" name="facebook_link" value="{{ get_setting('facebook_link') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Youtube - <i class="fa fa-youtube"></i></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="youtube_link">
                                            <input type="url" class="form-control" placeholder="https://www.link.com" name="youtube_link" value="{{ get_setting('youtube_link') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Instagram - <i class="fa fa-instagram"></i></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="instagram_link">
                                            <input type="url" class="form-control" placeholder="https://www.link.com" name="instagram_link" value="{{ get_setting('instagram_link') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Twitter - <i class="fa fa-twitter"></i></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="twitter_link">
                                            <input type="url" class="form-control" placeholder="https://www.link.com" name="twitter_link" value="{{ get_setting('twitter_link') }}">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Newsletter Description</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.setting.update') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Description</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="newsletter_description">
                                            <textarea class="form-control" name="newsletter_description" id="" rows="4">{{ get_setting('newsletter_description') }}</textarea>
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
                                <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Contract Map Link</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="types[]" value="contract_map">
                                            <textarea class="form-control" name="contract_map" id="" rows="4">{{ get_setting('contract_map') }}</textarea>
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
