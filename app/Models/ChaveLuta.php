<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChaveLuta extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'faixa',
        'peso',
        'atletas',
    ];

    public function campeonato()
    {
        return $this->belongsTo(Campeonato::class);
    }

    public function atletas()
    {
        return $this->belongsToMany(Atleta::class);
    }
}
