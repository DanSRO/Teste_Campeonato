<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatoController extends Controller
{
    public function create(){
        return view('campeonatos.create');
    }

    public function listarTodos(){
        $campeonatos = Campeonato::where('status', 'ativo')->paginate(10);
        return view('campeonatos.search', compact('campeonatos'));
    }

    public function detalhes($id){
        $campeonato = Campeonato::findOrFail($id);
        $caminhoImagem = asset('imgs/torneio-infantil.jpg');
        return view('campeonatos.detalhes', compact('campeonato', 'caminhoImagem'));
    }

    public function search(Request $request)
    {
        $caminhoImagem = asset('imgs/torneio-infantil.jpg');
        $titulo = $request->input('titulo');
        $tipo = $request->input('tipo');
        $estado = $request->input('cidade_estado');
        // $cidade = $request->input('cidade');

        $resultados = Campeonato::where('titulo', 'like', "%$titulo%")
            ->where('tipo', $tipo)
            ->where('cidade_estado', $estado)
            ->get();
        // dd($resultados);
        return view('campeonatos.search', compact('resultados', 'caminhoImagem'));

    }
}