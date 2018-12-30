@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title">about te quiero cocinar</h1>
                        <p class="text-3"></p>
                        <hr class="custom-divider">
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
                            <img src="https://via.placeholder.com/300x400" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8 text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel elementum dui, vitae pharetra turpis. Aenean sagittis sit amet velit a accumsan. Donec semper mi quis leo facilisis, ut commodo turpis dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer quis risus aliquam mauris lobortis vehicula sed ac massa. Ut laoreet blandit massa, non pretium diam egestas vitae. Curabitur tortor turpis, maximus cursus pharetra eu, auctor convallis ipsum. Suspendisse tincidunt sapien velit, vitae pretium ipsum congue vel. Duis ut leo nec sapien efficitur laoreet. Phasellus lacinia sapien tortor, at commodo dui bibendum vitae.
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