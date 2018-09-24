@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title"><strong>W</strong>orkshops</h1>
                        <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                        <hr class="custom-divider">
                    </div>
                </div>
            </div>

            <section class="section section-default mb-0">
                @foreach($workshops as $workshop)
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="https://via.placeholder.com/600x400" class="img img-responsive" alt="">
                            </div>
                            <div class="col-sm-6 center-container" style="background-color: #FFFFFF">
                                <div class="text-center">
                                    <h4>{{$workshop->name}}</h4>
                                    <span>{{$workshop->duration}}h | from ${{$workshop->from_price}}</span>
                                    <br>
                                    <a href="{{url('/workshops/'.$workshop->name.'/courses/'.$dates['from'].'/'.$dates['to'])}}" class="btn btn-dark magazine-item" style="margin-top: 20px">View more</a>
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