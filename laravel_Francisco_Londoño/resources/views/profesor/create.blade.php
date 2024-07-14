@extends('layouts1.app')

@section('docente', 'Introducir nombre del docente')

@section('contenido')
<br>
<h3>Introducir nuevo docente</h3>
<form action="/cursos" method="POST">
    @csrf
    <div class="mb-3">
      <label for="profesor" class="form-label">Nombre del docente</label>
      <input type="text" class="form-control" id="nombre" name="profesor">

    </div>
    <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <input type="text" class="form-control" id="descripcion" name="especialidad">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
