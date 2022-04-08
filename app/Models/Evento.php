<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['tituloEvento', 'descricaoEvento', 'horaInicio', 'horaFim', 'gridCheck', 'data'];
    public $timestamps = false;
}
