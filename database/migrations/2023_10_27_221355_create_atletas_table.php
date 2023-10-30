<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique()->required();
            $table->string('nome')->requered();
            $table->date('data_nascimento')->required();
            $table->string('cpf')->required();
            $table->enum('sexo', ['Masculino', 'Feminino'])->required();
            $table->string('email')->required()->unique();
            $table->string('senha')->required();
            $table->string('equipe')->required();
            $table->enum('faixa', ['Marrom', 'Preta'])->required();
            $table->enum('peso', ['Leve', 'Pesado'])->required();
            $table->date('data_inscricao');
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
        Schema::dropIfExists('atletas');
    }
}
