<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;

class EditarVacante extends Component
{
    public function render()
    {
        //Consultar la Base de Datos
        $salario = Salario::all();
        $categoria = Categoria::all();
        
        return view('livewire.editar-vacante', [
            'salarios' => $salario,
            'categorias' => $categoria
        ]);
    }
}
