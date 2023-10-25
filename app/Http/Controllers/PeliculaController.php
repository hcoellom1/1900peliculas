<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pelicula;

class PeliculaController extends Controller
{
    //

    public function index(){
        $peliculas = Pelicula::all();
        return view('peliculas', compact('peliculas'));
    }

    public function create(){
        return view('crearPeliculas');
    }

    public function store(Request $request){
        $nvaPelicula = new Pelicula();
        $nvaPelicula->codigoPelicula = $request->input('codigoPelicula');
        $nvaPelicula->titulo = $request->input('titulo');
        $nvaPelicula->anyoDebut = $request->input('anioDebut');
        $nvaPelicula->duracion  = $request->input('duracion');
        $nvaPelicula->codigoGenero = $request->input('genero');
        $nvaPelicula->codigoProductor = $request->input('productor');
        
        $nvaPelicula->save();
        //return $name2;
    }

    public function edit($id){
        $pelicula = Pelicula::find($id);
        return view('editarPelicula', compact('pelicula'));
    }

    public function update(Request $request, $id){
        $pelicula = Pelicula::find($id);        
        $pelicula->titulo = $request->input('titulo');
        $pelicula->anyoDebut = $request->input('anioDebut');
        $pelicula->duracion  = $request->input('duracion');
        $pelicula->codigoGenero = $request->input('genero');
        $pelicula->codigoProductor = $request->input('productor');

        $pelicula->update();

         return redirect()->route('pelicula.inicio');
    }

    public function delete($id){
        $pelicula = Pelicula::find($id);
        return view('eliminar', compact('pelicula'));
    }
}
