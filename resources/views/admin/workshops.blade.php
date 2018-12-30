@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Workshops</div>

                    <div class="panel-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Nombre EN</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($workshops as $workshop)
                                <tr>
                                    <td>BOTONES</td>
                                    <td>{{$workshop->id}}</td>
                                    <td>{{$workshop->id}}</td>
                                    <td>{{$workshop->id}}</td>
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
