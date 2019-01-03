@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title">workshops</h1>
                        <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                    </div>
                </div>
            </div>

            <section class="section section-default mb-0">
                @foreach($workshops as $workshop)
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{asset('uploads/workshops/'.$workshop->id.'.jpg')}}" class="img img-fluid" alt="">
                            </div>
                            <div class="col-sm-6 center-container" style="background-color: #FFFFFF">
                                <div class="text-center">
                                    <h4>{{$workshop['name'.$lang_floor]}}</h4>
                                    <span>{{$workshop->duration}}h | {{trans('strings.from')}} €{{$workshop->from_price}}</span>
                                    <br>
                                    <a href="{{url('/workshops/'.$workshop->name.'/courses/'.$dates['from'].'/'.$dates['to'].'/'.$lang)}}" class="btn btn-dark magazine-item text-capitalize" style="margin-top: 20px">{{trans('strings.view_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>

        </div>

        @include('partials.footer')

    </div>

    @include('partials.vendor')

    </body>
@endsection