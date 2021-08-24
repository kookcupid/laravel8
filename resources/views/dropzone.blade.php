@extends('layouts.master')
@section('title','dropzone')
@section('content')

    <h1 class="text-center">Dropzone Page</h1>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h3  class="text-center">Dropzone File Upload</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('dropzone.store')}}" enctype="multipart/form-data" class="dropzone dz-clickable" id="image-upload">
                                @csrf 
                                <div>
                                    <h3 class="text-center">Upload Image By Click On Box</h3>
                                </div>
                                <div class="dz-default dz-message"><span>Drop files her to upload</span></div>
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