<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Services\DeletadorDeEvento;
use App\Services\Eventos\ListaDeEventos;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function index(Request $request)
    {
        $dia = explode(" ", $request->session()->get('dia'));
        $diaHoje  = $dia[0];
        $eventos = Evento::where('data', $diaHoje)
            ->get();
        if ($eventos) {
            $eventos = null;
            return view('events.index', compact('eventos', 'diaHoje'));
        }

        return view('events.index', compact('eventos', 'diaHoje'));
    }

    public function destroy(Request $request, DeletadorDeEvento $removedorDeEvento)
    {
        $nomeEvento = $removedorDeEvento->deletarEvento($request->tituloEvento);
        return redirect()->action([EventoController::class, 'index']);
    }
}
