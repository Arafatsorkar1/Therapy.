@extends('backend.user.layouts.app')
@section('title','Edit Profile')
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
        <div class="card">
            <div class="card-body">
                <form action="{{ route('user.profile.update',$user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="User Name" name="name" value="{{ $user->name ?? old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ $user->email ?? old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" placeholder="Phone Number" name="phone" readonly value="{{ $user->phone ?? old('phone') }}">
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" placeholder="Date Of Birth" name="dob" value="{{ $user->dob ?? old('dob') }}">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" placeholder="Age" name="age" value="{{ $user->age ?? old('age') }}">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="sex" id="" class="form-control">'
                            <option value="male">Male</option>
                            <option value="female">female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Profile Image</label>
                        <small>Image -  (171px * 208px)</small>
                        <input type="file" class="form-control" placeholder="Profile Image" name="image">

                        <div style="width: 171px;height: 208px;overflow: hidden;border: 1px solid gray;">
                            <img src="{{ asset($user->image) ?? asset('images/default.jpg') }}" style="width: 100%;height: 100%;object-fit: contain;" alt="Profile Image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>About Me</label>
                        <textarea name="about" id="" class="form-control" rows="6">{!! $user->about ?? old('about') !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
