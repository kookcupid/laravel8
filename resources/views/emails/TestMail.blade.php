
@extends('layouts.master')
@section('title','TestMail')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="text-center">TestMail</h1>
            </div>
        </div>
    </div>

    <h1>{{$details['title']}}</h1>
    <p>{{$details['body']}}</p>
    <p>Thank You</p>
@endsection

@section('page-script')

@endsection