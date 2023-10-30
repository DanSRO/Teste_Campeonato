<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nome',
        'data_nascimento',
        'cpf',
        'sexo',
        'email',
        'senha',
        'equipe',
        'faixa',
        'peso',
        'data_inscricao',
    ];

    public function campeonato()
    {
        return $this->belongsTo(Campeonato::class);
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
