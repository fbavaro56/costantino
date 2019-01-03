@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title">{{trans('strings.about2')}} te quiero cocinar</h1>
                        <p class="text-3"></p>
                    </div>
                </div>
            </div>

            <section class="section section-default mb-0">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-md-4 center">
                            <hr>
                        </div>
                        <div class="col-md-8 text-justify">
                        </div>
                        <div class="col-md-4 center">
                            <img src="{{asset('img/ross.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8 text-justify">
                            <p>
                                {{trans('about.p1')}}
                            </p>
                            <p>
                                {{trans('about.p2')}}
                            </p>

                            <h4 class="text-uppercase">{{trans('strings.the_chef')}}</h4>

                            <p>
                                {{trans('about.p3')}}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        @include('partials.footer')

    </div>



    @include('partials.vendor')


    </body>
@endsection