@extends('backend.user.layouts.app')
@section('title','View Profile')
@section('css')
    <style>
        .mb-2-3, .my-2-3 {
            margin-bottom: 2.3rem;
        }

        .section-title {
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }
        .text-primary {
            color: #ceaa4d !important;
        }
        .text-secondary {
            color: #15395A !important;
        }
        .font-weight-600 {
            font-weight: 600;
        }
        .display-26 {
            font-size: 1.3rem;
        }

        @media screen and (min-width: 992px){
            .p-lg-7 {
                padding: 4rem;
            }
        }
        @media screen and (min-width: 768px){
            .p-md-6 {
                padding: 3.5rem;
            }
        }
        @media screen and (min-width: 576px){
            .p-sm-2-3 {
                padding: 2.3rem;
            }
        }
        .p-1-9 {
            padding: 1.9rem;
        }

        .bg-secondary {
            background: #15395A !important;
        }
        @media screen and (min-width: 576px){
            .pe-sm-6, .px-sm-6 {
                padding-right: 3.5rem;
            }
        }
        @media screen and (min-width: 576px){
            .ps-sm-6, .px-sm-6 {
                padding-left: 3.5rem;
            }
        }
        .pe-1-9, .px-1-9 {
            padding-right: 1.9rem;
        }
        .ps-1-9, .px-1-9 {
            padding-left: 1.9rem;
        }
        .pb-1-9, .py-1-9 {
            padding-bottom: 1.9rem;
        }
        .pt-1-9, .py-1-9 {
            padding-top: 1.9rem;
        }
        .mb-1-9, .my-1-9 {
            margin-bottom: 1.9rem;
        }
        @media (min-width: 992px){
            .d-lg-inline-block {
                display: inline-block!important;
            }
        }
        .rounded {
            border-radius: 0.25rem!important;
        }
    </style>
@endsection
@section('userContent')
    <div class="col-md-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="{{ asset($user->image) ?? asset('/images/default.jpg') }}" alt="{{ $user->name }}">
                                </div>
                                <div class="col-lg-6 px-xl-10">
                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                        <h3 class="h2 text-white mb-0">{{ $user->name ?? '' }}</h3>
                                        <span class="text-primary">{{ $user->email ?? 'example@mail.com' }}</span>
                                    </div>
                                    <ul class="list-unstyled mb-1-9">
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone Number:</span> {{ $user->phone ?? '01* *** *** **' }}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Date Of Birth:</span> {{ $user->dob ?? '00-00-0000' }}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Age:</span> {{ $user->age ?? 00 }}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Gender:</span> {{ $user->sex }}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><a href="{{ route('user.profile.edit',$user->id) }}" class="btn btn-success">Edit Profile</a></li>
                                    </ul>
                                    <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                        <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div>
                        <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
                        <p>{!! $user->about ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
