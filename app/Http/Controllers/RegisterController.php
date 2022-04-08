<?php

namespace App\Http\Controllers;

use App\Services\CriadorDeEvento;
use App\Services\DeletadorDeEvento;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request, CriadorDeEvento $criadorDeEvento)
    {
        $gridCheck = (bool) isset($request->gridCheck) ? true : false;
        $criadorDeEvento->criarEvento(
            $request->tituloEvento,
            $request->descricaoEvento,
            $request->horaInicio,
            $request->horaFim,
            $request->dataEvento,
            $gridCheck
        );
        return redirect()->action([EventoController::class, 'index']);
    }

    public function destroy(Request $request, DeletadorDeEvento $deletarEvento)
    {
        $gridCheck = (bool) isset($request->gridCheck) ? true : false;
        //esse método tem retorno para ser utiliado
        //ele devolve o nome do evento;
        $deletarEvento->deletarEvento(
            $request->id
        );
        return redirect()->action([EventoController::class, 'index']);
    }
}
