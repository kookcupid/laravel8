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
                        <h3  class="text-center">ALL POST<br><br><a href="/add-post"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postsModal">Add Post</a></h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_deleted')}}
                                </div>    
                            @endif
                            <table id="postTable" class="table table-striped">
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

    <!-- <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h3  class="text-center">ALL POST<br><br><a href="/add-post"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postsModal">Add Post</a></h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_deleted')}}
                                </div>    
                            @endif
                            <table class="table table-striped">
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
    </section> -->

<!-- Modal -->
<div class="modal fade" id="postsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="postForm">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Post Title"/>       
            </div>
             <div class="from-group">
                <label for="title">Post Description</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>                         
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>


                                   
 
@endsection

@section('page-script')

    <script>
        $("#postForm").submit(function(e){
            e.preventDefault();

            let title = $("#title").val();
            let body = $ ("#body").val();
            let _token = $ ("input[name=_token").val();

            $.ajax({
                url: "{{}route('posts.add')}",
                type:"POST",
                data:{
                    title:title,
                    body:body,
                    _token:_token
                },
                success:function(response){
                    if(rsponse)
                        $("#postsTable tbody").prepend('<tr><td>'+response.title +'</td><td>'+response.body+'</td></tr>')
                        $("#postsForm")[0].reset();
                        $("#postsModal")[0].modal('hide');
                }
            });
        });
    </script>

@endsection
