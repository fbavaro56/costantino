@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar Curso de {{$course->title}}
                    </div>

                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{url('admin/courses/update')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="course_id" value="{{$course->id}}">
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="0" @if($course->status == 0) selected @endif>Oculto</option>
                                    <option value="1" @if($course->status == 1) selected @endif>Público</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Nombre Ingles:</label>
                                <input type="text" name="title" class="form-control" id="name" value="{{$course->title}}">
                            </div>
                            <div class="form-group">
                                <label for="title_es">Nombre Español:</label>
                                <input type="text" name="title_es" class="form-control" id="name_es" value="{{$course->title_es}}">
                            </div>
                            <div class="form-group">
                                <label for="quotas">Cupo:</label>
                                <select name="quota" id="quota" class="form-control">
                                    @for($i=0 ; $i<20 ; $i++)
                                        <option value="{{$i}}" @if($i == $course->quotas) selected @endif>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Precio:</label>
                                <input type="number" name="price" class="form-control" value="{{$course->price}}">
                            </div>
                            <div class="form-group">
                                <label for="children_price">Precio Kids:</label>
                                <input type="number" name="children_price" class="form-control" value="{{$course->children_price}}">
                            </div>
                            <div class="form-group">
                                <label for="class_lang">Idioma Clase:</label>
                                <select name="class_lang" id="class_lang" class="form-control">
                                    <option value="es" @if($course->class_lang == 'es') selected @endif>es</option>
                                    <option value="en" @if($course->class_lang == 'en') selected @endif>en</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="start">Inicio:</label>
                                <select name="start" id="start" class="form-control">
                                    @include('admin.workshops.courses.horas2')
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="end">Fin:</label>
                                <select name="end" id="end" class="form-control">
                                    @include('admin.workshops.courses.horas3')
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="day_of_week">Día de semana:</label>
                                <select name="day_of_week" id="day_of_week" class="form-control">
                                    <option value="0" @if($course->day_of_week == 0) selected @endif>DOMINGO</option>
                                    <option value="1" @if($course->day_of_week == 1) selected @endif>LUNES</option>
                                    <option value="2" @if($course->day_of_week == 2) selected @endif>MARTES</option>
                                    <option value="3" @if($course->day_of_week == 3) selected @endif>MIERCOLES</option>
                                    <option value="4" @if($course->day_of_week == 4) selected @endif>JUEVES</option>
                                    <option value="5" @if($course->day_of_week == 5) selected @endif>VIERNES</option>
                                    <option value="6" @if($course->day_of_week == 6) selected @endif>SABADO</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
