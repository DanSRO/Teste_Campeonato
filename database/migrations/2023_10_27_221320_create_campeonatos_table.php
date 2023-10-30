<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampeonatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeonatos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique()->required();
            $table->string('titulo')->required();
            $table->string('imagem')->required();
            $table->string('cidade_estado')->required();
            $table->date('data_realizacao')->required();
            $table->text('sobre_evento')->required();
            $table->text('ginasio')->required();
            $table->text('informacoes_gerais')->required();
            $table->text('entrada_publico')->nullable();
            $table->enum('tipo', ['Kimono', 'No-Gi'])->required();
            $table->enum('fase', ['Fase1', 'Fase2', 'Fase3'])->required();
            $table->enum('status', ['Ativo', 'Inativo'])->required();
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
        Schema::dropIfExists('campeonatos');
    }
}
