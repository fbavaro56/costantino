@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 50px">
                        Eventos Especiales
                        <div class="pull-right">
                            <a href="{{url('admin/special-events/create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
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
                                <th>Descripción</th>
                                <th>Descripción EN</th>
                                <th>Inicio</th>
                                <th>Fin</th>
                                <th>Tipo evento</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="{{url('admin/special-events/edit/')}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td>ID</td>
                                <td>NOMBRE ES</td>
                                <td>NOMBRE EN</td>
                                <td>DESC ES</td>
                                <td>DESC EN</td>
                                <td>INICIO</td>
                                <td>FIN</td>
                                <td>TIPO</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
