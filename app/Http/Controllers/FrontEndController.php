<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pagina;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function Home() {
        $categorias=Categoria::all();
        $paginas=Pagina::all();


        return view('home',['categorias'=>$categorias,'paginas'=>$paginas]);
    }

    // web services, rest, api
    public function ListarCategorias(Request $req) {
        $categorias = Categoria::all();
        return $categorias;
    }

    public function Categorias(Request $req,$nombreseo) {
        try {
            $categorias = Categoria::all();
            $paginas=Pagina::all();

            $cat = Categoria::where('nombreseo', $nombreseo)->first();

            $peliculas = Pelicula::where('idcategoria', $cat->id)->get();

            return view('categorias', ['categorias' => $categorias,'paginas'=>$paginas, 'cat' => $cat, 'peliculas' => $peliculas]);
        } catch(\Exception $exception) {
            $categorias = Categoria::all();
            $paginas=Pagina::all();
            return view('404',['categorias'=>$categorias,'paginas'=>$paginas]);
        }

    }
    public function Peliculas(Request $req,$nombreseo,$nombrepelicula) {
        $categorias = Categoria::all();
        $paginas=Pagina::all();
        $peli=Pelicula::where('nombreseo',$nombrepelicula)->first();
        return view('peliculas',['categorias'=>$categorias,'paginas'=>$paginas,'peli'=>$peli]);
    }
    public function Paginas(Request $req,$nombreseo) {
        $categorias = Categoria::all();
        $paginas=Pagina::all();

        $pag=Pagina::where('nombreseo',$nombreseo)->first();
        return view('paginas',['categorias'=>$categorias,'paginas'=>$paginas,'pag'=>$pag]);
    }
    public function Contacto(Request $req) {
        $categorias = Categoria::all();
        $paginas=Pagina::all();
        return view('contacto',['categorias'=>$categorias,'paginas'=>$paginas]);
    }
}
