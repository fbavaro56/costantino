@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Reservas</div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive table-sm" style="font-size: 11px">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Taller</th>
                            <th>Clase</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Pagado</th>
                            <th>Total</th>
                            <th>Nombre</th>
                            <th>Adultos</th>
                            <th>Niños</th>
                            <th>Idioma</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Observaciones</th>
                            <th>Reservación</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr @if($booking->date < $today) style="background-color: grey" @endif @if($booking->date == $today) style="background-color: lightseagreen" @endif>
                                <td>{{$booking->id}}</td>
                                <td>{{$booking->workshop->name}}</td>
                                <td>{{$booking->course->title}}</td>
                                <td>
                                    <span class="label label-success">
                                        {{$booking->date}}
                                    </span>
                                </td>
                                <td>
                                    <span class="label label-primary">
                                        {{$booking->course->start}}
                                    </span>

                                    <span class="label label-danger">
                                        {{$booking->course->end}}
                                    </span>
                                </td>
                                <td>
                                    @if($booking->status == 1)
                                        <i class="fa fa-check text-success"></i>
                                        @else
                                        <i class="fa fa-ban text-danger"></i>
                                    @endif

                                </td>
                                <td>{{$booking->total}} EUR</td>
                                <td>{{$booking->name}}</td>
                                <td>{{$booking->adults}}</td>
                                <td>{{$booking->kids}}</td>
                                <td>{{$booking->course->class_lang}}</td>
                                <td>{{$booking->email}}</td>
                                <td>{{$booking->phone}}</td>
                                <td>
                                    <span style="font-size: 11px">
                                        {{$booking->comments}}
                                    </span>
                                </td>
                                <td>
                                    <span class="label label-success">
                                        {{$booking->created_at}}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$bookings->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
