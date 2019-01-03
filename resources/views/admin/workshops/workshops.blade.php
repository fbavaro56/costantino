@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 50px">
                        Workshops
                        <div class="pull-right">
                            <a href="{{url('admin/workshops/create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($workshops as $workshop)
                                <tr>
                                    <td>
                                        <a href="{{url('admin/workshops/edit/'.$workshop->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                    </td>
                                    <td>{{$workshop->id}}</td>
                                    <td>{{$workshop->name_es}}</td>
                                    <td>{{$workshop->name}}</td>
                                    <td>
                                        <a href="{{url('admin/courses/'.$workshop->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Ver cursos</a>
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
