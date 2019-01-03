@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar {{$workshop->name}}
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
                        <form method="post" action="{{url('admin/workshops/update')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="workshop_id" value="{{$workshop->id}}">
                            <div class="form-group">
                                <label for="name">Nombre Ingles:</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$workshop->name}}">
                            </div>
                            <div class="form-group">
                                <label for="name_es">Nombre Español:</label>
                                <input type="text" name="name_es" class="form-control" id="name_es" value="{{$workshop->name_es}}">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/workshops/'.$workshop->id.'.jpg')}}" class="img-thumbnail" alt="">
                                <input type="file" name="img_file" required>
                                <p class="help-block">JPG, JPEG, PNG. Se establecerá el tamaño de la imagen a 800x600 px</p>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection