
@extends('layouts.master')
@section('title','home')
@section('content')
    <h3>{{ __('message.welcome')  }}</h3>
    <h3>{{ __('message.language')  }}</h3>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="text-center">Home Page</h1>
            </div>
        </div>
    </div>

@endsection

@section('page-script')

@endsection
