@extends('layouts.master')
@section('title','resize-Image')
@section('content')

    <h1 class="text-center">Resize-Image Page</h1>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                        <h3  class="text-center">Resize-Image</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('image.resize')}}" enctype="multipart/form-data">
                                @csrf 
                                <div class="form-group">
                                    <label for="file">Choose Image</label>
                                    <input type="file" name="file" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
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