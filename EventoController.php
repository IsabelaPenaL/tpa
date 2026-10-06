<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Pergunta;

class EventoController extends Controller
{
   
    public function show(Evento $evento)
    {
        
        $perguntas = Pergunta::with('user')
            ->where('evento_id', $evento->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('eventos.show', compact('evento', 'perguntas'));
    }
}
