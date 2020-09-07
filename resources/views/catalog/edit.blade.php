@extends('layouts.master')
@section('content')

<div class="container">

  <h1>Modificar Película con id Número {{$pelicula['id']}}</h1>
  @php{{$pelicula['id']}} =  ($id) @endphp
  <form class="form" action="/catalog/edit/nueva{id}" method="post">
    <!-- con esto evitamos ataques ocultos-->
    {{csrf_field()}}
    <div class="form-group">
      <label for="title">Título</label>
      <input name="id" type="hidden" class="form-control" value="{{$pelicula['id']}}"><!--retornamos también el id identificativo-->
      <input name="title" type="text" class="form-control" value="{{$pelicula['title']}}">
    </div>
    <div class="form-group">
      <label for="year">Año</label>
      <input name="year" type="text" class="form-control" value="{{$pelicula['year']}}">
    </div>
    <div class="form-group">
      <label for="director">Director</label>
      <input name="director" type="text" class="form-control" value="{{$pelicula['director']}}">
    </div>
    <div class="form-group">
      <label for="poster">Poster</label>
      <input name="poster" type="text" class="form-control"  value="{{$pelicula['poster']}}">
    </div>
    <div class="form-group">
      <label for="synopsis">Resumen</label>
      <textarea name="synopsis" rows="4" class="form-control">{{$pelicula['synopsis']}}</textarea>
    </div>
    <input class="btn btn-primary" type="submit" name="enviar" value="Modificar película">
    <a href="{{ url('/catalog')}}" class="btn btn-basic">Volver al listado</a>
  </form>

</div>

@stop
