<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventoCadastrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //protected $fillable = ['titulo', 'descricao', 'data_ini', 'data_fim', 'dia_todo'];
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tituloEvento');
            $table->string('descricaoEvento');
            $table->string('horaInicio');
            $table->string('horaFim');
            $table->boolean('gridCheck')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('temporadas');
    }
}
