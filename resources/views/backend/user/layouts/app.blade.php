@extends('frontend.layout.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include('backend.user.includes.sidebar')
                @yield('userContent')
            </div>
        </div>
    </section>
@endsection
