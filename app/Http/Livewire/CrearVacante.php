<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        //Consultar la Base de Datos
        $salario = Salario::all();
        $categoria = Categoria::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salario,
            'categorias' => $categoria
        ]);
    }
}
