@extends('layouts.master')
@section('content')
<form class="form" action="/catalog/compartir{id}" method="post">
<div class="row">

    <div class="col-sm-4">
    
    <input name="poster" type="hidden"  class="form-control" value="{{$pelicula['poster']}}">
    <img src="{{ $pelicula['poster'] }}" alt="" height="400px">
    </div>
    
    <div class="col-sm-8">
    <input name="t" type="hidden"  class="form-control" value="{{$pelicula['title']}}">
    <h1> {{$pelicula['title']}} </h1>
    <input name="year" type="hidden"  class="form-control" value="{{$pelicula['year']}}">
    <h4>Año: {{$pelicula['year']}}</h4>
    <input name="director" type="hidden"  class="form-control" value="{{$pelicula['director']}}">
    <h4>Director: {{$pelicula['director']}}</h4>
    <br>
    <input name="synopsis" type="hidden"  class="form-control" value="{{$pelicula['synopsis']}}">
    <b>Resumen: </b> {{$pelicula['synopsis']}}
    <br><br>
    <b>Estado:</b>

    @php if($pelicula['rented']){ @endphp
   <a> Alquilada</a>
    @php } else { @endphp
    <a>Disponible</a>
    @php } @endphp
    <br><br>
    @php if($pelicula['rented']){ @endphp
    
    @php } else { @endphp
 
    @php } @endphp
    @php{{$pelicula['id']}} =  ($id) @endphp
  
    <!-- con esto evitamos ataques ocultos-->
    {{csrf_field()}}
    <div class="form-group">
    <label for="exampleFormControlInput1">Destinatario:</label>
    <input name="m" type="email" class="form-control" placeholder="name@example.com">
  </div>
    <input class="btn btn-success" type="submit" name="enviar" value="Compartir">
 
  </form>


 
    </div>
</div>
@endsection
