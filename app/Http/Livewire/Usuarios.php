<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Usuarios extends Component
{
    public function render()
    {
        //para que agarre la informacion del api
        //peticion para la api del backend
        $response = Http::get('http://127.0.0.1:8001/api/usuarios');
        //retorna los usuarios reales
        $usuarios = $response->json();
        //mandamos los datos al front
        return view('livewire.usuarios', compact('usuarios'));
    }
}
