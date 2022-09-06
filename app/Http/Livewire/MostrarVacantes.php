<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{

    // protected $listeners = [ 'prueba' ];

    // public function prueba ()
    // {
    //     dd('Desde prueba');
    // }
    
    public function render()
    {
        
        $paginacion=10;
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate($paginacion);
        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);




    }
}
