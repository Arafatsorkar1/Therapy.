@extends('frontend.layout.app')
@section('title',$services->title)
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Service - {{ $services->title }}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Service</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card h-100">
                        <img class="img-fluid" style="height: 250px;width: 100%;object-fit: cover;" src="{{ asset($services->image ?? 'images/default.jpg') }}" alt="">
                        <div class="card-body">
                            <h3><a href="Javascript:void(0);" class="text-dark">{{ $services->title ?? ''}}</a></h3>
                            <small>Created By : <b>{{ $services->user->name }}</b> At : {{ $services->created_at->diffForHumans() ?? '' }}</small>
                            <a href="Javascript:void(0);"><p class="font-weight-bold"> Price : {{ $services->price ?? 0 }}</p></a>
                            <p>{!! $services->description ?? '' !!}</p>
                            @auth
                                <a href="{{ route('order-service',$services->slug) }}" class="btn btn-success">Order The Service...</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success">Login First For Order...</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @foreach($latest_service as $service)
                        <a href="{{ route('single-service',$service->slug) }}" class="row">
                            <div class="col-md-12">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="" style="height: 100px;overflow: hidden;">
                                                <img src="{{ $service->image ? asset($service->image) : asset('images/default.jpg') }}" class="fit-image img-fluid rounded-start" alt="{{ $service->slug ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-title font-weight-bold">{{ Str::limit($service->title,20) ?? ''}}</p>
                                                <p class="card-text"><small class="text-body-secondary">Created At {{ $service->created_at->diffForHumans() ?? '' }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
@endsection
