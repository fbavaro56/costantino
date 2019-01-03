@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title"><span style="text-transform: lowercase">{{$course['title'.$lang_floor]}}</span></h1>
                        <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <p class="text-3">
                            {{trans('strings.date')}}: <b>{{$date}}</b>
                        </p>
                        <p class="text-3">
                            {{trans('strings.hour')}}: <b>{{$course->start}} {{trans('strings.to')}} {{$course->end}}</b>
                        </p>
                        <p class="text-3">
                            {{trans('strings.location')}}: <b>Carrer Taulat 74, 08005 Barcelona</b>
                        </p>
                        <p class="text-3">
                            {{trans('strings.language')}}: <b>{{$course->class_lang}}</b>
                        </p>
                        <p class="text-3">
                            {{trans('strings.price')}} {{trans('strings.adults')}}: <b>{{$course->price}} €</b>
                        </p>
                        <p class="text-3">
                            {{trans('strings.price')}} {{trans('strings.kids')}}: <b>{{$course->children_price}} €</b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <form action="{{url('/course/booking')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="lang" value="{{$lang}}">
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <input type="hidden" name="date" value="{{$date}}">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                {{trans('strings.booking_form')}}
                            </h2>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">{{trans('strings.name')}}</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">{{trans('strings.phone')}}</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="adults">{{trans('strings.adults')}}</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kids">{{trans('strings.kids')}}</label>
                                <select name="kids" id="kids" class="form-control">
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">{{trans('strings.special_comments')}}</label>
                                <textarea name="comments" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lg btn-primary">
                                {{trans('strings.book')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <br><br><br><br><br>
        </div>

        @include('partials.footer')

    </div>

    @include('partials.vendor')

    </body>
@endsection