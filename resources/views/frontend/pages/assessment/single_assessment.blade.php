@extends('frontend.layout.app')
@section('title','Contract')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-center text-uppercase mb-3">{{ $category->name }}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">{{ $category->name }}</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('submit-assessment') }}" method="post" class="card">
                        @csrf
                        <input type="hidden" name="categories_id" value="{{ $category->id }}">
                        <div class="card-header">
                            @if(!Auth::check())
                            <div class="alert alert-info">
                                Please Login First for the assessment
                            </div>
                            @else
                                <div class="alert alert-success">
                                    Fillup The Form Cearfully
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                @foreach($category->subCategories as $s_category)
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h5 class="d-inline-block"> {{ $s_category->name }}</h5>
                                            <div class="float-right">
                                                @foreach($s_category->answers as $ans)
                                                    <span class="p-1">{{$ans->name}} ({{ $ans->mark }})</span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @foreach(optional($s_category)->questions as $question)
                                                <div class="row">
                                                    <div class="{{ optional($s_category->answers)->count() == 3 ? 'col-md-10' : 'col-md-8' }}">
                                                        <p>{{ optional($question)->title }}</p>
                                                    </div>
                                                    <div class="{{ optional($s_category->answers)->count() == 3 ? 'col-md-2' : 'col-md-4' }}">
                                                        @foreach($s_category->answers as $ans)
                                                            <span class="p-1">
                                                            {{--<input type="radio" id="{{ Str::substr(Str::random(15).$question->title,-5).$ans->id }}" name="{{ Str::slug(Str::substr($question->title,-10)) }}" value="{{ $ans->mark }}"> <label for="{{Str::substr($question->title,-5).$ans->id }}">{{ $ans->name }}</label>--}}
                                                                @php
                                                                    $rand_string = \Illuminate\Support\Str::random(20);
                                                                @endphp
                                                                <input type="radio" id="{{ $rand_string.\Illuminate\Support\Str::substr($question->slug,-10).$ans->id }}" name="{{ $question->slug.$question->id }}" value="{{ $ans->mark }}"> <label for="{{ $rand_string.\Illuminate\Support\Str::substr($question->slug,-10).$ans->id }}">{{ $ans->name }}</label>
                                                        </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-dark">
                                Submit Assessment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
