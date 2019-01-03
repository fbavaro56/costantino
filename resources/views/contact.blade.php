@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title">{{trans('strings.contact')}}</h1>
                        <p class="text-3">
                            {{trans('about.contact')}}
                        </p>

                    </div>
                </div>
            </div>

            <div id="map"></div>
            <section class="section section-default mb-0">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                {{trans('about.conctact2')}}
                            </p>
                        </div>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">{{trans('strings.name')}}:</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">{{trans('strings.phone')}}:</label>
                                    <input type="phone" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comment">{{trans('strings.message')}}:</label>
                                    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-default">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

        </div>

        @include('partials.footer')

    </div>



    @include('partials.vendor')





    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDygjp8hu_douzyPFCp0fRZK85dngUxi7g&callback=initMap">
    </script>
    </body>
@endsection