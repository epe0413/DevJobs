<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;

    public $cv;

    protected $rules=[
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        $datos = $this->validate();

        // Almacenar el cv
        $cv = $this->cv->store('public/cv');
        $datos['imagen'] = str_replace('public/cv/', '',$cv);

        // Crear Vacante

        // Crear notificación y enviar el email

        // Mostrar el usuario un mensaje de Ok

    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
