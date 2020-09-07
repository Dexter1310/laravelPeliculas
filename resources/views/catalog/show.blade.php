@extends('layouts.master')
@section('content')
<br>
<hr>
<div class="row">

    <div class="col-sm-4">
    
 
    <img src="{{ $pelicula['poster'] }}" alt="" height="400px">
    </div>
    
    <div class="col-sm-8">
    <h1> {{$pelicula['title']}} </h1>
    <h4>Año: {{$pelicula['year']}}</h4>
    <h4>Director: {{$pelicula['director']}}</h4>
    <br>
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
    <a href="{{url('/catalog/devuelta') }}" class="btn btn-danger">Devolver película</a>
    @php } else { @endphp
    <a href="{{url('/catalog/alquilada') }}" class="btn btn-primary">Alquilar película</a>
    @php }
        if(empty($id)){
        $id=0;        }
        
        @endphp
    @php{{$pelicula['id']}} =  ($id) @endphp
    <a href="{{url('/catalog/edit/' .$id  ) }}"class="btn btn-warning">Editar película</a>
<!--    <a href="{{url('/catalog/compartir' .$id  )}}"class="btn btn-success">Compartir</a>-->
    <a href="{{url('/catalog')}}" class="btn btn-basic">Volver al listado</a>  
    <a href="{{url('/catalog/alquilada' .$id)}}" class="btn btn-basic">Borrar</a>  
    </div>
</div>
@endsection
