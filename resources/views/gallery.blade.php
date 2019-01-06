@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title" style="text-transform: lowercase">{{trans('strings.gallery')}}</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-4 bajar">
                            <img src="{{asset('uploads/gallery/'.$image->name.'_'.$image->id.'.jpg')}}" class="img-fluid" alt="">
                        </div>
                    @endforeach
                </div>
            </div>

            <br><br><br><br><br>
        </div>

        @include('partials.footer')

    </div>

    @include('partials.vendor')

    </body>
@endsection