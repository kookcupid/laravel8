@extends('layouts.master')
@section('title','Add-Student')
@section('content')

    <h1 class="text-center">Add-Student Page</h1>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3  class="text-center">add-student</h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('student_added'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('student_added')}}
                            </div>
                            @endif
                            <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type=" text" name="name" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
                                    <img id="previewImg" alt="profile image" style="max-width:130px;margin-top:20px;"/>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
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
    @if(Session::has('student_added'))   
    <script>
            toastr.success("{!! Session::get('student_added') !!}");
    </script>
    @endif

    @if(Session::has('student_added'))   
    <script>
            swal("Great Job!","{!! Session::get('student_added') !!}","success",{
                botton:"OK",
            });
    </script>
    @endif

@endsection