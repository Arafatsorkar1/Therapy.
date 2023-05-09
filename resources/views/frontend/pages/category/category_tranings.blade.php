@extends('frontend.layout.app')
@section('title','Category Traning')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">{{ $category->name }}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">{{ $category->name }}</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">{{ $category->name }} Of Tranings</h1>
            <div class="row">
                @foreach($category->tranings as $traning)
                    <div class="col-md-3">
                        <a href="{{ route('single-traning',$traning->slug) }}">
                            <span class="card">
                                <img style="width: 100%;height: 220px;" src="{{ asset($traning->image) }}" alt="">
                                <div class="card-body">
                                    <h3>{{ $traning->title }}</h3>
                                    <p>Price:{{$traning->price}}</p>
                                    <small>{!! Str::limit($traning->description,125) !!}</small>
                                </div>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
