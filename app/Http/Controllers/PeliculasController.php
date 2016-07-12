<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PeliculasController extends Controller
{
    public function index ()
    {
        $pelicula = Pelicula::all();
        return view('pelicula.index',compact('pelicula'));
    }

    public function show($id)
    {
        $pelicula = Pelicula::find($id);
        return view('pelicula.show',compact('pelicula',$pelicula));
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::find($id)->delete();
        Session::flash('flash messege','Pelicula eliminada con exito');
        return redirect()->to('pelicula');
    }

}
