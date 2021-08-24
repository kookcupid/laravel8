@extends('layouts.master')
@section('title','Edit post')
@section('content')

    <h1 class="text-center">Edit Post Page</h1>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3  class="text-center">Edit Post</h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_updated')}}
                                </div>    
                            @endif
                            <form method="POST" action="{{route('post.update')}}">
                                @csrf
                                <input type="hidden" namme="id" value="{{$post->id}}" />
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Enter Post Title"/>       
                                </div>
                                <div class="from-group">
                                    <label for="title">Post Description</label>
                                    <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>                         
                                </div>
                                <input type="submit" class="btn btn-success" value="Update"/>
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