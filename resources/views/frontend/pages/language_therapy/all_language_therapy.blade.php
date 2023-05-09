@extends('frontend.layout.app')
@section('title','Language Therapy')
@section('css')
    <style>
        .h-match {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .row::after {
            content: "";
            flex: auto;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Language Therapy</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Language Therapy</h6>
        </div>
    </div>
    <!-- Page Header Start -->


   <section>
       <div class="container">
           <div class="row mb-2">
               @foreach($langs as $lang)
                   <div class=" col-md-4 h-match mb-3">
                       <div class="card h-100">
                           <a href="{{ route('single-l-therapy',$lang->slug ?? '') }}" class="card-img-top">
                               <img class="img-fluid" style="height: 250px;width: 100%;object-fit: cover;" src="{{ asset($lang->image ?? 'images/default.jpg') }}" alt="">
                           </a>
                           <div class="card-body">
                               <h3><a href="{{ route('single-l-therapy',$lang->slug ?? '') }}" class="text-dark">{{ Str::limit($lang->title,45) ?? ''}}</a></h3>
                               <a href=""><p class="font-weight-bold"> Price : {{ $lang->price ?? 0 }}</p></a>
                               <p>{!! Str::words($lang->description,20) ?? '' !!}</p>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
           <div class="row">
               <div class="col">
                   {!! $langs->links() !!}
               </div>
           </div>
       </div>
   </section>
    <!-- Contact End -->
@endsection
