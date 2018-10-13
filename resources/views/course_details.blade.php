@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title">{{$course->title}}</h1>
                        <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <p class="text-3">
                            Date: <b>{{$date}}</b>
                        </p>
                        <p class="text-3">
                            Hour: <b>{{$course->start}} to {{$course->end}}</b>
                        </p>
                        <p class="text-3">
                            Location: <b>Dirección</b>
                        </p>
                        <hr class="custom-divider">
                    </div>
                </div>
            </div>

            <div class="container">
                <form action="{{url('/course/booking')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <input type="hidden" name="date" value="{{$date}}">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Booking form</h2>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name & last name</label>
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
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">Special comments</label>
                                <textarea name="comments" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lg btn-primary">
                                Submit
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