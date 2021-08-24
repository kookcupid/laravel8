@extends('layouts.master')
@section('title','Post')
@section('content')

    <h1 class="text-center">Post Page</h1>
    
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h3  class="text-center">ALL POST</h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_deleted')}}
                                </div>    
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)      
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>
                                            <a href="/posts/{{$post->id}}" class="btn btn-success">View</a>
                                            <a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
                                            <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="padding-top:60px;">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3  class="text-center">Add New Post</h3>
                            <div class="wrapper">
                                    <a href="/add-post" class="btn btn-info">Add</a>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
        <ul >
            <ul>
            </ul>
        </ul>
@endsection

@section('page-script')

@endsection
