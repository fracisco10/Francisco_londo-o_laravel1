@extends('layouts.app')

@section('titulo','Listado de curso')

@section('contenido')
<br>
<h3>class="text-center">Listado de cursos Disponibles</h3>
<br>
<div class="row">
    @foreach ($course as $cursito)

        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$cursito->nombre}}</h5>
                  <p class="card-text">{{$cursito->descripcion}}</p>
                  <a href="#" class="btn btn-success">Ver detalle</a>
                </div>
            </div>
        </div>

    @endforeach
</div>

@endsection
