@extends('layouts.master')
@section('title','Edit-Student')
@section('content')

    <h1 class="text-center">Edit-Student Page</h1>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3  class="text-center">edit-student</h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('student_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('student_updated')}}
                            </div>
                            @endif
                            <form method="POST" action="{{route('student.update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name=id value="{{$student->id}}"/>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type=" text" name="name" value="{{$student->name}}" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
                                    <img id="previewImg" alt="profile image" src="{{asset('images')}}/{{$student->profileimage}}"  style="max-width: 130px;margin: top 20px;"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Submiit</button>
                            </form>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')

<script>
    function previewFile(input){
        var file=$("input[type=file]").get(0).files(0);
        if(file)
        {
            var reader = new FileReader();
            reader.onload = function(){
                $('#previewImg').attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>

@endsection