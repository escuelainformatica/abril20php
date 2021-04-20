<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function Home() {
        $categorias=Categoria::all();


        return view('home',['categorias'=>$categorias]);
    }
    public function Categorias(Request $req,$nombreseo) {
        try {
            $categorias = Categoria::all();

            $cat = Categoria::where('nombreseo', $nombreseo)->first();

            $peliculas = Pelicula::where('idcategoria', $cat->id)->get();

            return view('categorias', ['categorias' => $categorias, 'cat' => $cat, 'peliculas' => $peliculas]);
        } catch(\Exception $exception) {
            $categorias = Categoria::all();
            return view('404',['categorias'=>$categorias]);
        }

    }
    public function Peliculas(Request $req,$nombreseo,$nombrepelicula) {
        $categorias = Categoria::all();
        $peli=Pelicula::where('nombreseo',$nombrepelicula)->first();
        return view('peliculas',['categorias'=>$categorias,'peli'=>$peli]);
    }
    public function Contacto(Request $req) {
        $categorias = Categoria::all();
        return view('contacto',['categorias'=>$categorias]);
    }
}
