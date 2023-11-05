<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Models\Campeonato;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $campeonatosDestaques = Campeonato::where('destaque', true)->where('status', 'ativo')->paginate(8);
        $campeonatosNaoDestaques = Campeonato::where('destaque', false)->where('status', 'ativo')->latest()->paginate(8);
        // dd($campeonatosNaoDestaques);
        $atletas = Atleta::all();
        // $caminhoImagem = asset('imgs','torneio-infantil.jpg');
        return view('welcome', compact('atletas', 'campeonatosDestaques', 'campeonatosNaoDestaques'));
    }    
}
