@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nueva imagen para la galería
                    </div>
                    <div class="panel-body">
                        <form action="{{url('/admin/gallery/confirm')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre imagen</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <input type="file" name="img_file" required>
                                    <p class="help-block">JPG, JPEG, PNG. Se establecerá el tamaño de la imagen a 800x800 px</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-save"></i> Guardar</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection