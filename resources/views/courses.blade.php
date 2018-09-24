@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title"> <strong>{{$workshop['name'][0]}}</strong>{{substr($workshop['name'],1)}}</h1>
                        <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                        <hr class="custom-divider">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                            <tr class="bg-dark">
                                <th></th>
                                @foreach($dates as $date)
                                    <th width="200px">
                                        {{$date['day']}}
                                        <br>
                                        {{explode(',',\Carbon\Carbon::parse($date['date'])->toFormattedDateString())[0]}}
                                    </th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="bg-light-blue text-white vcenter">
                                    Morning
                                </td>
                                @foreach($dates as $date)
                                    <td class="vcenter">
                                        <table class="table">
                                            <tbody>
                                            {{--por cada curso--}}
                                            @foreach($date['courses'] as $course)
                                                @if($course->hourRange === 'Morning')
                                                    <tr>
                                                        <button class="btn @if($course->isAvailable)btn-light magazine-item hover-pink @endif"  @if(!$course->isAvailable) disabled @endif  style="margin-top: 10px">
                                                            <span class="text-xxs @if($course->isAvailable) course-no-available @endif">
                                                                <b>{{$course['title']}}</b>
                                                            </span>
                                                            <br>
                                                            <span class="text-xxs">{{$course->start}} to {{$course->end}}</span>
                                                            <br>
                                                            <span class="text-xxs">${{$course->price}}</span>
                                                        </button>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td class="bg-blue text-white vcenter" style="min-height: 500px!important;">
                                    Evening
                                </td>
                                @foreach($dates as $date)
                                    <td>
                                        <table class="table">
                                            <tbody>
                                            {{--por cada curso--}}
                                            @foreach($date['courses'] as $course)
                                                @if($course->hourRange === 'Evening')
                                                    <tr>
                                                        <button class="btn @if($course->isAvailable)btn-light magazine-item hover-pink @endif"  @if(!$course->isAvailable) disabled @endif  style="margin-top: 10px">
                                                            <span class="text-xxs @if($course->isAvailable) course-no-available @endif">
                                                                <b>{{$course['title']}}</b>
                                                            </span>
                                                            <br>
                                                            <span class="text-xxs">{{$course->start}} to {{$course->end}}</span>
                                                            <br>
                                                            <span class="text-xxs">${{$course->price}}</span>
                                                        </button>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        @include('partials.footer')

    </div>

    @include('partials.vendor')

    </body>
@endsection