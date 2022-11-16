<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    //controlador para controlar los metodos de consulta de la api
    public function index(){
        //peticion a la api
        $response = Http::get('http://127.0.0.1:8000/api/usuarios');

        $usuarios = $response->json();
        //dd retorna un json bien
        //dd($usuarios);
        //retorna la vista de usuarios con la tabla y mandar los datos compactados a la vista
        return view('usuarios', compact('usuarios'));
    }
}
