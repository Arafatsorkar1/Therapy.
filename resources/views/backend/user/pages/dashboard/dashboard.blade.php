@extends('backend.user.layouts.app')
@section('userContent')
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <div class="card rounded-0 border">
                    <div class="card-body">
                        Buy Traning
                        <h1 class="text-center text-warning">{{ auth()->user()->traningOrders->count() }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card rounded-0 border">
                    <div class="card-body">
                        Buy Assessment
                        <h1 class="text-center text-warning">{{ auth()->user()->assessmentOrders->count() }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
