<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:1024',
    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        // Almacenar la imagen
        $imagen = $this->imagen->store('public/vacantes');
        $nombre_imagen = str_replace('public/vacantes/', '',$imagen);
        dd($nombre_imagen);

        // Crear la vacante

        // Crear un mensaje

        // Redireccionar al usuario hacia vacantes
    }

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
