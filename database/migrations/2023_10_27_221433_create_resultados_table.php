<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campeonato_id')->constrained();
            $table->enum('faixa', ['Preta', 'Marrom']);
            $table->enum('peso', ['Leve', 'Pesado']);
            $table->string('primeiro_colocado');
            $table->string('segundo_colocado');
            $table->string('terceiro_colocado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
