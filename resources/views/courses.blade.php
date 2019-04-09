@extends('layouts.web')
@section('content')
    <body data-spy="scroll" data-target="#navSecondary" data-offset="170">

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="mt-5 mb-2 pt-3 view_title" style="text-transform: lowercase">{{$workshop['name'.$lang_floor]}}</h1>
                        <p class="text-3">
                            {{$workshop['description'.$lang_floor]}}
                        </p>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-1 text-center">
                        <a href="{{url('/workshops/'.$workshop->name.'/courses/'.$prev['from'].'/'.$prev['to'].'/'.$lang)}}">
                            <i style="margin-top: 20px" class="fa fa-backward text-dark magazine-item text-lg control"></i>
                        </a>
                    </div>
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    {{--<th class="bg-dark"></th>--}}
                                    @foreach($dates as $date)
                                        <th width="150px" class="@if($date['date'] === \Carbon\Carbon::now()->toDateString()) bg-pink text-white @else bg-dark @endif">
                                            {{$date['day']}}
                                            <br>
                                            <span class="text-xxs">{{explode(',',\Carbon\Carbon::parse($date['date'])->toFormattedDateString())[0]}}</span>
                                        </th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    {{--<td class=" vcenter">--}}
                                        {{--<b>Morning</b>--}}
                                    {{--</td>--}}
                                    @foreach($dates as $date)
                                        <td class="vcenter">
                                            <table class="table">
                                                <tbody>
                                                {{--por cada curso--}}
                                                @foreach($date['courses'] as $course)
                                                    @if($course->hourRange === 'Morning')
                                                        <tr>
                                                            <button onclick="window.location.replace('{{url('/course/view/'.$course->id.'/'.$date['date'].'/'.$lang)}}')" class="btn @if($course->isAvailable)btn-light magazine-item hover-pink @endif"  @if(!$course->isAvailable) disabled @endif  style="margin-top: 10px">
                                                            <span class="text-xxs @if($course->isAvailable) course-no-available @endif">
                                                                <b>{{$course['title'.$lang_floor]}}</b>
                                                            </span>
                                                                <br>
                                                                <span class="text-xxs">{{$course->start}} {{trans('strings.to')}} {{$course->end}}</span>
                                                                <br>
                                                                <span class="text-xxs">€{{$course->price}}</span>
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
                                    {{--<td class="vcenter" style="min-height: 500px!important;">--}}
                                        {{--<b>Evening</b>--}}
                                    {{--</td>--}}
                                    @foreach($dates as $date)
                                        <td class="vcenter">
                                            <table class="table">
                                                <tbody>
                                                {{--por cada curso--}}
                                                @foreach($date['courses'] as $course)
                                                    @if($course->hourRange === 'Evening')
                                                        <tr>
                                                            <button onclick="window.location.replace('{{url('/course/view/'.$course->id.'/'.$date['date'].'/'.$lang)}}')"  class="btn @if($course->isAvailable)btn-light magazine-item hover-pink @endif"  @if(!$course->isAvailable) disabled @endif  style="margin-top: 10px">
                                                            <span class="text-xxs @if($course->isAvailable) course-no-available @endif">
                                                                <b>{{$course['title'.$lang_floor]}}</b>
                                                            </span>
                                                                <br>
                                                                <span class="text-xxs">{{$course->start}} {{trans('strings.to')}} {{$course->end}}</span>
                                                                <br>
                                                                <span class="text-xxs">€{{$course->price}}</span>
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
                    <div class="col-md-1 text-center">
                        <a href="{{url('/workshops/'.$workshop->name.'/courses/'.$next['from'].'/'.$next['to'].'/'.$lang)}}">
                            <i style="margin-top: 20px" class="fa fa-forward text-dark magazine-item text-lg control"></i>
                        </a>
                    </div>
                </div>
            </div>

            <br><br><br><br><br>
        </div>

        @include('partials.footer')

    </div>

    @include('partials.vendor')

    </body>
@endsection
