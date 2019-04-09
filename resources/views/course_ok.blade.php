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
                                                  {{$course->price}} €
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
                                                    {{$course->children_price}} €
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                </td>
                                                <td>
                                                    Total
                                                </td>
                                                <td>
                                                    <span id="total_booking">{{$booking->total}}</span> €
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
    <script>

        // Render the PayPal button
        paypal.Button.render({
            // Set your environment
            env: 'sandbox', // sandbox | production

            // Specify the style of the button
            style: {
                layout: 'vertical',  // horizontal | vertical
                size:   'medium',    // medium | large | responsive
                shape:  'rect',      // pill | rect
                color:  'gold'       // gold | blue | silver | white | black
            },

            // Specify allowed and disallowed funding sources
            //
            // Options:
            // - paypal.FUNDING.CARD
            // - paypal.FUNDING.CREDIT
            // - paypal.FUNDING.ELV
            funding: {
                allowed: [
                    paypal.FUNDING.CARD,
                    paypal.FUNDING.CREDIT
                ],
                disallowed: []
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create
            client: {
                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                production: '<insert production client id>'
            },

            payment: function (data, actions) {
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: {
                                    total: $('#total_booking').text(),
                                    currency: 'EUR'
                                }
                            }
                        ]
                    }
                });
            },

            onAuthorize: function (data, actions) {
                return actions.payment.execute()
                    .then(function () {
                        window.alert('Pago completado!'); //TODO Redirigir a pago ok / ko
                    });
            }
        }, '#paypal-button-container');

    </script>
    </body>
@endsection
