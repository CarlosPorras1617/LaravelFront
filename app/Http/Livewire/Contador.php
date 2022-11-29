<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contador extends Component
{
    //para el contador y la vista
    public $numero = 0;
    //para que muestre ek nombre
    public $nombre = "";
    //cambiar color de boton
    public $activo= true;

    public function render()
    {
        return view('livewire.contador');
    }

    public function incrementar(){
        $this->numero++;
    }
    public function decrementar(){
        if ($this->numero > 0) {
            $this->numero--;
        }
    }

    //funcion cambiar estatus
    public function cambio(){
        $this->activo = !$this->activo;
    }
}
