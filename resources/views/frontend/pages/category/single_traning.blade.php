@extends('frontend.layout.app')
@section('title','Category Traning')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Single Traning</h1>
        <div class="d-inline-flex text-white">
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-2">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-8 mx-auto">
                   <div class="card">
                       @if($traning->image)
                           <img class="card-img-top" style="width: 100%;height: 320px;" src="{{ asset($traning->image) }}" alt="">
                       @else
                           <img class="card-img-top" style="width: 100%;height: 320px;" src="{{ asset('images/default.jpg') }}" alt="">
                       @endif
                       <div class="card-body">
                           <h3>{{ $traning->title}}</h3>
                           <small>{{ $traning->sub_title }}</small>
                           <p>{{ $traning->traningCategory->name }}</p>
                           <p>Price: <strong>{{ $traning->price }}</strong></p>
                            <p>{!! $traning->description !!}</p>
                       </div>
                       <div class="card-footer">
                           <a href="{{ route('buy-now',$traning->slug) }}" class="btn btn-success btn-sm">Buy Now</a>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
