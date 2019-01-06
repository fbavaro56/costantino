@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 50px">
                        Galería
                        <div class="pull-right">
                            <a href="{{url('admin/gallery/create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Agregar imagen</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach($images as $image)
                                <div class="col-md-2">
                                    <a href="{{url('/admin/gallery/delete/'.$image->id)}}" class="text-lg text-danger pull-right">X</a>
                                    <img src="{{asset('uploads/gallery/'.$image->name.'_'.$image->id.'.jpg')}}" class="img-responsive" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection