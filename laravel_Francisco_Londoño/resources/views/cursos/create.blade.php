@extends('layouts.app')

@section('titulo','crear curso')

@section('contenido')
<br>
<h3>Crear un nuevo curso</h3>
<form action="/cursos" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nombrecurso" class="form-label">Nombre del curso</label>
      <input type="text" class="form-control" id="nombre" name="nombre">

    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion del curso</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion del curso">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
