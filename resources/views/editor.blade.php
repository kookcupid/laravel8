@extends('layouts.master')
@section('title','TinyMCE')
@section('content')

    <h1 class="text-center">TinyMCE Page</h1>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h3  class="text-center">TinyMCE</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                @csrf 
                                  <textarea id="mytextarea" name="mytextarea"></textarea>
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
    tinymce.init({
      selector: '#textarea',
   });
  </script>

@endsection



            