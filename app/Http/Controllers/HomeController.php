<?php

namespace App\Http\Controllers;
use App\Movie;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }


    public function getHome()
    {
      if(!Auth::check()){
        return view('login');
      } else {
        $pelicula = Movie::all();
        return view('catalog.index', array('arrayPeliculas'=>$pelicula));
      }
  
    }
}
