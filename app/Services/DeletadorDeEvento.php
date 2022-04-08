<?php

namespace App\Services;

use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class DeletadorDeEvento
{
    public function deletarEvento(
        int $eventoId
    ): string {
        $nomeEvento = '';
        DB::transaction(function () use ($eventoId, &$nomeEvento) {
            $evento = Evento::find($eventoId);
            $nomeEvento = $evento->tituloEvento;
            $evento->delete();
        });

        DB::commit();
        return $nomeEvento;
    }
}
