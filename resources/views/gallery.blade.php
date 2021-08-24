@extends('layouts.master')
@section('title','gallery')
@section('content')



    <h1 class="text-center">gallery Page</h1>

    <section style="padding-top:60px;">
    
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @for($i=1;$i<=16;$i++)
                        <img data-original="http://45.33.113.129/images/img-{{$i}}.jpg"/>
                    @endfor
                </div>
            </div>
        </div>

    </section>

@endsection

@section('page-script')
    <script>
    $(document).ready(function(){
        $('img').lazyload()
    })
    </script>
@endsection