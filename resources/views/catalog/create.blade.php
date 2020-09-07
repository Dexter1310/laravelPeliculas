@extends('layouts.master')
@section('content')

<div class="container">

  <h1>Añadir Película</h1>

  <form class="form" action="/catalog/create/nueva" method="post">
  <!-- con esto evitamos ataques ocultos-->
  {{csrf_field()}}
    <div class="form-group">
      <label for="title">Título</label>
      <input name="title" type="text" class="form-control"  placeholder="titulo de la película"require >
    </div>
    <div class="form-group">
      <label for="year">Año</label>
      <input name="year" type="text" class="form-control" placeholder="Año de creación" require >
    </div>
    <div class="form-group">
      <label for="director">Director</label>
      <input name="director" type="text" class="form-control" placeholder="Nombre director" require >
    </div>
    <div class="form-group">
      <label for="poster">Poster</label>
      <input name="poster" type="text" class="form-control" placeholder="enlace url de imagen " requiere >
    </div>
    <div class="form-group">
      <label for="synopsis">Resumen</label>
      <textarea name="synopsis" rows="5" class="form-control" placeholder="Synopsis"></textarea >
    </div>
    <input class="btn btn-primary" type="submit" name="enviar" value="Añadir película">
    
    <a href="{{ url('/catalog')}}" class="btn btn-default">Volver al listado</a>
  </form>

</div><br><br>

@stop

