<?php

namespace App\Services;

use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class CriadorDeEvento
{
    //protected $fillable = ['titulo', 'descricao', 'data_ini', 'data_fim', 'dia_todo', '$data];
    public function criarEvento(
        string $tituloEvento,
        string $descricaoEvento,
        string $horaInicio,
        string $horaFim,
        string $data,
        bool $gridCheck
    ): Evento {
        DB::beginTransaction();
        $evento = Evento::create([
            'tituloEvento' => $tituloEvento,
            'descricaoEvento' => $descricaoEvento,
            'horaInicio' => $horaInicio,
            'horaFim' => $horaFim,
            'gridCheck' => $gridCheck,
            'data' => $data
        ]);
        DB::commit();

        return $evento;
    }
}
