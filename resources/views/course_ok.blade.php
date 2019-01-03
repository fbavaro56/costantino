@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')
        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title">{{trans('strings.booking_complete')}}</h1>
                    </div>
                </div>
            </div>

            <section class="section section-default mb-0">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>{{trans('strings.thanks')}} {{$booking->name}}</h3>
                            <h4>
                                {{trans('strings.pay')}}
                            </h4>
                            <div class="resumen bajar">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr align="center" valign="middle">
                                                <th colspan="4">
                                                    {{$course['title'.$lang_floor]}}
                                                    {{$booking->date}} /
                                                    {{$course->start}} {{trans('strings.to')}}
                                                    {{$course->end}}
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    {{trans('strings.adults')}}
                                                </td>
                                                <td>
                                                    {{$booking->adults}}
                                                </td>
                                                <td>
                                                    {{$course->children_price}} EUR.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{trans('strings.kids')}}
                                                </td>
                                                <td>
                                                    {{$booking->kids}}
                                                </td>
                                                <td>
                                                    {{$course->price}} EUR.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                </td>
                                                <td>
                                                    Total
                                                </td>
                                                <td>
                                                    {{$booking->total}} EUR.
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                            <div id="paypal-button-container" class="bajar"></div>
                        </div>


                    </div>
                </div>
            </section>

        </div>

        @include('partials.footer')

    </div>

    @include('partials.vendor')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script src="{{asset('js/pp.js')}}"></script>
    </body>
@endsection