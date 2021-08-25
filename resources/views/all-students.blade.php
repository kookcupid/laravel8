@extends('layouts.master')
@section('title','All-Student')
@section('content')

    <h1 class="text-center">All-Student Page</h1>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3  class="text-center">All-Student</h3> <a href="/add-student" class="btn btn-success">Add New</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('student_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('student_deleted')}}
                            </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Profile Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->name}}</td>
                                        <td><img src="{{asset('images')}}/{{$student->profileimage}}" style="max-width: 60px;"/></td>    
                                        <td>
                                            <a href="/edit-student/{{$student->id}}" class="btn btn-success">Edit</a>
                                            <a href="/delete-student/{{$student->id}}" class="btn btn-danger">Delete</a>
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

@endsection

@section('page-script')


@endsection