<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostularVacante extends Component
{
    public $cv;

    protected $rules=[
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
