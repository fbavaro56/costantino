@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nuevo Curso de {{$workshop->name}}
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
                        <form method="post" action="{{url('admin/courses/confirm')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="workshop_id" value="{{$workshop->id}}">
                            <div class="form-group">
                                <label for="title">Nombre Ingles:</label>
                                <input type="text" name="title" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="title_es">Nombre Español:</label>
                                <input type="text" name="title_es" class="form-control" id="name_es">
                            </div>
                            <div class="form-group">
                                <label for="quotas">Cupo:</label>
                                <select name="quota" id="quota" class="form-control">
                                    @for($i=0 ; $i<20 ; $i++)
                                        <option value="{{$i}}" @if($i == 10) selected @endif>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Precio:</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="children_price">Precio Kids:</label>
                                <input type="number" name="children_price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="class_lang">Idioma Clase:</label>
                                <select name="class_lang" id="class_lang" class="form-control">
                                    <option value="es">es</option>
                                    <option value="en">en</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="start">Inicio:</label>
                                <select name="start" id="start" class="form-control">
                                    @include('admin.workshops.courses.horas')
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="end">Fin:</label>
                                <select name="end" id="end" class="form-control">
                                    @include('admin.workshops.courses.horas')
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="day_of_week">Día de semana:</label>
                                <select name="day_of_week" id="day_of_week" class="form-control">
                                    <option value="0">DOMINGO</option>
                                    <option value="1">LUNES</option>
                                    <option value="2">MARTES</option>
                                    <option value="3">MIERCOLES</option>
                                    <option value="4">JUEVES</option>
                                    <option value="5">VIERNES</option>
                                    <option value="6">SABADO</option>
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