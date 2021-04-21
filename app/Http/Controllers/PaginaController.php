<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function insertarGet(Request $req) {
        $pagina=new Pagina();
        return view('admin.agregar',['pagina'=>$pagina]);
    }
    public function insertarPost(Request $req) {
        $pagina=new Pagina();
        $pagina->nombre=$req->post('nombre');
        $pagina->nombreseo=$req->post('nombreseo');
        $pagina->contenido=$req->post('contenido');

        $pagina->save();

        return view('admin.agregar',['pagina'=>$pagina]);
    }
}
