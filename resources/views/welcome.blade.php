@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')
        <div role="main" class="main">
            @include('partials.slider')
            <div class="row">
                <div class="col-md-7" style="z-index: 1">
                    <div class="row buttons-special-section">
                        <div class="col-sm-4 sec-1 magazine-item sec">
                            <a href="{{url('gallery/'.$lang)}}" style="text-decoration: none;">
                                <div class="sec-1-button">
                                        <span class="sec-1-text letter-space">
                                            {{trans('strings.gallery')}}
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 sec-2 magazine-item sec">
                            <a href="{{url('about/'.$lang)}}" style="text-decoration: none;">
                                <div class="sec-2-button">
                                    <span class="sec-2-text letter-space">
                                         {{trans('strings.the_chef')}}
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 sec-3 magazine-item sec">
                            <a href="" style="text-decoration: none;">
                                <div class="sec-3-button">
                                    <span class="sec-3-text letter-space text-center">
                                         {{trans('strings.special_events')}}
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 sec-video embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fEQAoyzbsaY?autoplay=1&loop=1&rel=0&disablekb=1&controls=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    {{--<object>--}}
                        {{--<param name="movie" value="https://www.youtube.com/embed/If2rE7Sagyw?autoplay=1&loop=1&rel=0&disablekb=1&controls=0&showinfo=0"></param>--}}
                        {{--<param name="autoplay" value="1">--}}
                        {{--<embed src="https://www.youtube.com/embed/If2rE7Sagyw?autoplay=1&loop=1&rel=0&disablekb=1&controls=0&showinfo=0" type="application/x-shockwave-flash"></embed>--}}
                    {{--</object>--}}
                </div>
            </div>
            <div class="row buttons-special-section">
                <div class="col-sm-5 sec-4 sec"></div>
                <div class="col-sm-5 sec-5 magazine-item sec" style="z-index: 1">
                    <a href="{{url('workshops/'.$lang)}}" style="text-decoration: none;">
                        <div class="sec-2-button">
                                    <span class="sec-2-text letter-space">
                                         workshops
                                    </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 sec-6 magazine-item sec" style="z-index: 2">
                    <a href="{{url('contact/'.$lang)}}" style="text-decoration: none;">
                        <div class="sec-2-button">
                                    <span class="sec-6-text letter-space text-center">
                                         {{trans('strings.contact2')}} <br><br>
                                        <i class="fa fa-map-marker-alt text-lg"></i>
                                    </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>

  @include('partials.vendor')

    </body>
@endsection





