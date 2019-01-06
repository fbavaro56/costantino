@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 50px">
                        Cursos de {{$workshop->name}}
                        <div class="pull-right">
                            <a href="{{url('admin/courses/create/'.$workshop->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Nombre EN</th>
                                <th>Plazas</th>
                                <th>Precio</th>
                                <th>Precio Kids</th>
                                <th>Idioma Clase</th>
                                <th>Inicio</th>
                                <th>Fin</th>
                                <th>Día</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>
                                        <a href="{{url('admin/courses/edit/'.$course->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                    </td>
                                    <td>{{$course->id}}</td>
                                    <td>{{$course->title_es}}</td>
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->quotas}}</td>
                                    <td>{{$course->price}}</td>
                                    <td>{{$course->children_price}}</td>
                                    <td>{{$course->class_lang}}</td>
                                    <td>{{$course->start}}</td>
                                    <td>{{$course->end}}</td>
                                    <td>{{$weekMap[$course->day_of_week]}}</td>
                                    <td>
                                        <!--TODO--><label><input type="checkbox" onclick="alert('revisamos staus y enviamos a back')" value="" checked></label>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection