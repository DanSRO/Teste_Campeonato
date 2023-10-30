<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'titulo',
        'imagem',
        'cidade_estado',
        'data_realizacao',
        'sobre_evento',
        'ginasio',
        'informacoes_gerais',
        'entrada_publico',
        'tipo',
        'fase',
        'status',
    ];

    public function atletas()
    {
        return $this->hasMany(Atleta::class);
    }

    public function chaveLutas()
    {
        return $this->hasMany(ChaveLuta::class);
    }

    public function resultados()
    {
        return $this->hasMany(Resultado::class);
    }
}
