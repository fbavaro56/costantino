@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nuevo Workshop
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
                        <form method="post" action="{{url('admin/workshops/confirm')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Nombre Ingles:</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="name_es">Nombre Español:</label>
                                <input type="text" name="name_es" class="form-control" id="name_es">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción Ingles:</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description_es">Descripción Español:</label>
                                <textarea name="description_es" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen</label>
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