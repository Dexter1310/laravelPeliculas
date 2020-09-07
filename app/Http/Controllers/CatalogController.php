<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;


class CatalogController extends Controller
{
      public function getIndex()
      {
      $pelicula = Movie::all();
      return view('catalog.index', array('arrayPeliculas'=>$pelicula));

      }

//////////////////////////////////////// MOSTRAR LISTADO //////////////////////////////////////////


      public function getShow($id) {
      $pelicula = Movie::findOrFail($id);
      return view('catalog.show', array('id'=>$id), array('pelicula'=>$pelicula));
      }

////////////////////////////////////  CREAR PELICULA ////////////////////////////////////////////

      public function getCreate(Request $request){
      return view('catalog.create');
     }

      public function store(Request $request){
      $peli =new Movie();//instancia con la clase de modelo
      //LEEMOS LOS VALORES DEL FORMULARIO
      $peli->title=$request->input('title');
      $peli->year=$request->input('year');
      $peli->director=$request->input('director');
      $peli->poster=$request->input('poster');
      $peli->synopsis=$request->input('synopsis');

      $peli->save();//GUARDAMOS CON EL MÉTODO save

      return view('catalog.show')->with('pelicula',$peli);
      //return "<h4>Se inserto la película con exito</h4>";
      // le mostramos un mensaje  de inserción 
  }


//////////////////////////////////  EDITAR O MODIFICAR  PELICULA  //////////////////////////////////////


  public function getEdit($id){
  $pelicula = Movie::where('id',$id)->first();
  return view ('catalog.edit',compact('pelicula'));
}

      public function modificar(Request $request){
  
      $peli = Movie::find($request->input('id'));
      $peli->title=$request->input('title');
      $peli->year=$request->input('year');
      $peli->director=$request->input('director');
      $peli->poster=$request->input('poster');
      $peli->synopsis=$request->input('synopsis');

        
      $peli->save();//GUARDAMOS CON EL MÉTODO save
      return "se modifico la película con exito";
      ?><script>  alert()</script><?php
      // le mostramos un mensaje de ya modificado

      }

      public function alquiler(){
            return view('catalog.alquilada');
      }
      public function retornada(){
            return view('catalog.devuelta');
      }

      /////////////////// BORRAR //////////////////////////
      public function borrar($id){
            $pelicula = Movie::findOrFail($id);// permite recuperar un registro de un modelo a partir de su ID 
            $pelicula->delete();
            // $pelicula2 = Movie::all();
            // return view('catalog.index', array('arrayPeliculas'=>$pelicula2));
            return redirect()->route('peli');

      }

    //////////////////////////// ENVIO DE PELICULA//////////////////////////////
    
    
      public function getCorreo($id){
            $pelicula = Movie::findOrFail($id);// permite recuperar un registro de un modelo a partir de su ID 
            return view('catalog.correo', array('id'=>$id), array('pelicula'=>$pelicula));

      }

      public function correo(Request $request){
         
            $m=$request->input('m');//pasamos por variable el mail del formulario de la vista correo.blade.php

        Mail::send('emails.contactos',$request->all(),function($msj) use ($m){//todo el churro de la Mail
            
                        $msj->subject("Hola que tal estas");//cuerpo de mensaje
                        $msj->to($m);
       });
   Session:: flash('message','Mensaje enviado correctamente');
   return Redirect ::to ('/catalog');// le redireccionamos de nuevo a donde queremos(en este caso al conjunto de peliculas)

            }


}

