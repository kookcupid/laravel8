@extends('layouts.master')
@section('title','upload')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="text-center">Upload Page</h1>
            </div>
        </div>
    </div>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3  class="text-center">Upload File</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('upload.uploadfile')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">Choose File</label>
                                    <input type="file" class="form-control" name="file" id="file"/>
                                </div>
                                <button type="submit" class="btn btn-success">Upload</button>
                            </form>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')

@endsection