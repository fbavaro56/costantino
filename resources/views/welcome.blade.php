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
                        <div class="col-sm-4 sec-1 magazine-item">
                            <a href="#">
                                <div class="sec-1-button">
                                        <span class="sec-1-text">
                                            GALLERY
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 sec-2 magazine-item">
                            <a href="">
                                <div class="sec-2-button">
                                    <span class="sec-2-text">
                                         OUR CHEFS
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 sec-3 magazine-item">
                            <a href="">
                                <div class="sec-3-button">
                                    <span class="sec-3-text">
                                         SPECIAL EVENTS
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 sec-video embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/If2rE7Sagyw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row buttons-special-section">
                <div class="col-sm-5 sec-4"></div>
                <div class="col-sm-5 sec-5 magazine-item" style="z-index: 1">
                    <a href="">
                        <div class="sec-2-button">
                                    <span class="sec-2-text">
                                         OUR WORKSHOPS
                                    </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 sec-6"></div>
            </div>
        </div>

        @include('partials.footer')

    </div>

  @include('partials.vendor')

    </body>
@endsection





