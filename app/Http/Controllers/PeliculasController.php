<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

//tenemos ue llamar al request que se creo
use App\Http\Requests\CreatePeliculasRequest;

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
        Session::flash('flash messege','pelicula eliminada con exito');
        return redirect()->to('pelicula');
    }

    public function create(){
        return view('pelicula.create');
        //asi accedemos a la vista de crear, solo acceder
    }

    //se le pasa como argumento a la funcion store
    public function store(CreatePeliculasRequest $request){
        //esta funcion sirve para almacenar los datos provenientes de la vista
        $pelicula = new Pelicula();
        $pelicula->nombre = $request->input('nombre');
        $pelicula->ano_lanzamiento = $request->input('ano_lanzamiento');
        $pelicula->descripcion = $request->input('descripcion');
        $pelicula->idioma = $request->input('idioma');
        $pelicula->Promedio_cal = $request->input('promedio_cal');
        $pelicula->precio = $request->input('precio');
        $pelicula->director_id = $request->input('director_id');
        //eso fue solamente para recibir los datos desde la vista, aun no guardamos
        $pelicula->save();
        Session::flash('flash_message','pelicula Creada Con exito!');
        return redirect()->to('pelicula');

    }


    //metodo o funcion para acceder a la vista de editar y ademas encontrar al que se quiere editar
    public function edit($id){
        $pelicula = Pelicula::find($id);
        return view('pelicula.edit',compact('pelicula', $pelicula));
    }


    //el update funciona igual que el store, con la unica diferencia
    //de que busca la id que se quiere editar en vez de crear una nueva
    public function update(CreatePeliculasRequest $request, $id){
        $pelicula = Pelicula::find($id);
        $pelicula->nombre = $request->input('nombre');
        $pelicula->ano_lanzamiento = $request->input('ano_lanzamiento');
        $pelicula->descripcion = $request->input('descripcion');
        $pelicula->idioma = $request->input('idioma');
        $pelicula->Promedio_cal = $request->input('promedio_cal');
        $pelicula->precio = $request->input('precio');
        $pelicula->director_id = $request->input('director_id');
        //eso fue solamente para recibir los datos desde la vista, aun no guardamos
        $pelicula->save();
        Session::flash('flash_message','pelicula Editada Con exito!');
        return redirect()->to('pelicula');
    }


}
