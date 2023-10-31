<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatoController extends Controller
{
    public function index(){
        $campeonatos = Campeonato::all();
        $caminhoImagem = asset('imgs/torneio-infantil.jpg'); 
        return view('campeonatos.index', compact('campeonatos', 'caminhoImagem'));
    }

    public function create(){
        return view('campeonatos.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagem',
            'cidade_estado' => 'required|string|max:255',
            'data_realizacao' => 'required',
            'sobre_evento' => 'required|max:255',
            'ginasio' => 'required|string|max:255',
            'informacoes_gerais' => 'required|string',
            'tipo' => 'required|string',
            'fase' => 'required',
            'status' => 'required',
            'destaque'=>'required'
        ]);

        $existingAtleta = Campeonato::where('codigo', $request->codigo)->first();
        if ($existingAtleta) {
            return redirect()->back()->withErrors(['codigo' => 'Este código já está em uso.'])->withInput();
        }

        $campeonato = new Campeonato();
        $campeonato->codigo = uniqid();
        $campeonato->titulo = $request->titulo;
        $campeonato->imagem = $request->imagem->store('imgs', 'public');
        $campeonato->cidade_estado = $request->cidade_estado;
        $campeonato->data_realizacao = $request->data_realizacao;
        $campeonato->sobre_evento = $request->sobre_evento;
        $campeonato->ginasio = $request->ginasio;
        $campeonato->informacoes_gerais = $request->informacoes_gerais;
        $campeonato->tipo = $request->tipo;
        $campeonato->fase = $request->fase;
        $campeonato->status = $request->status;
        $campeonato->destaque = $request->destaque;
        $campeonato->save();

        return redirect()->route('campeonatos.index')->with('msg', 'Campeonato cadastrado com sucesso.');        
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

    public function show($id){
        $atletas = Campeonato::findOrFail($id);
        return view('show', compact('atletas'));
    }
}