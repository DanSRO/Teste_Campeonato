<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Models\Campeonato;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampeonatoController extends Controller
{
    public function index(){
        $campeonatos = Campeonato::all();        
        return view('/campeonatos/index', compact('campeonatos'));
    }

    public function create(){
        return view('campeonatos.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagem'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $caminhoImagem = 'imgs/' . $nomeImagem;
            $imagem->move(public_path('imgs'), $nomeImagem);
    
            // Salva o nome da imagem no modelo
        $campeonato->imagem = $nomeImagem;
        }
        $campeonato->cidade_estado = $request->cidade_estado;
        $dataFormatada = Carbon::createdFromFormat('D-m-Y', $request->data_realizacao)->format('D-m-Y');
        $campeonato->data_realizacao = $dataFormatada;
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
        $campeonatos = Campeonato::find($id);
        $caminhoImagem = asset('imgs/'.$campeonatos->imagem);
        if(!$campeonatos){
            abort(404);
        }
        return view('campeonatos.detalhes', compact('campeonatos', 'caminhoImagem'));
    }

    public function search(Request $request)
    {
        // Não é necessário usar Campeonato::find() aqui

        $titulo = $request->input('titulo');
        $tipo = $request->input('tipo');
        $estado = $request->input('cidade_estado');

        $resultados = Campeonato::where('titulo', 'like', "%$titulo%")
            ->where('tipo', $tipo)
            ->where('cidade_estado', $estado)
            ->get();
            
        $caminhoImagem = $resultados->isNotEmpty() ? asset('imgs/'.$resultados->first()->imagem) : null;

        return view('campeonatos/search', compact('resultados', 'caminhoImagem'));
    }


    public function show($id){
        $campeonatos = Campeonato::findOrFail($id);
        return view('campeonatos/detalhes', compact('campeonatos'));
    }
}