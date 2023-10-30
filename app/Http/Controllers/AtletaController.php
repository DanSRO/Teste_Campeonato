<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Models\Campeonato;
use Illuminate\Http\Request;

class AtletaController extends Controller
{
    public function index(){
        $atletas = Atleta::all();
        return view('atletas.index', compact('atletas'));
    }

    public function create(){
        return view('atletas.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|max:14',
            'sexo' => 'required',
            'email' => 'required|email|max:255',
            'senha' => 'required|string|min:6|confirmed',//Criar campo de confirmação no formulário
            'equipe' => 'required|string',
            'faixa' => 'required|string',
            'peso' => 'required',
            'data_inscricao' => 'required'
        ], 
        [
            'email.unique' => 'Este email já está em uso. Por favor, escolha outro.',            
        ]);

        $existingAtleta = Atleta::where('codigo', $request->codigo)->first();
        if ($existingAtleta) {
            return redirect()->back()->withErrors(['codigo' => 'Este código já está em uso.'])->withInput();
        }

        $atleta = new Atleta();
        $atleta->codigo = uniqid();
        $atleta->nome = $request->nome;
        $atleta->data_nascimento = $request->data_nascimento;
        $atleta->cpf = $request->cpf;
        $atleta->sexo = $request->sexo;
        $atleta->email = $request->email;
        $atleta->senha = bcrypt($request->senha); //Criptografar a senha
        $atleta->equipe = $request->equipe;
        $atleta->faixa = $request->faixa;
        $atleta->peso = $request->peso;
        $atleta->data_inscricao = $request->data_inscricao;
        $atleta->save();

        return redirect()->route('atletas.index')->with('msg', 'Atleta cadastrado com sucesso.');
        
    }

    public function show($id){
        $atleta = Atleta::findOrFail($id);
        return view('show', compact('atleta'));
    }
    
    public function certificados($id){
        $atleta = Atleta::findOrFail($id);
        $certificados = $atleta->campeonatos->map(function($campeonato){
            return [
                'certificado' => $campeonato->pivot->venceu ? 'Certificado de Vitória' : 'Certificado de Participação',
                'frase' => $campeonato->pivot->venceu ? 'Você foi ao pódio!' : 'Obrigado por participar!'
            ];
        });
        return view('certificados', compact('certificados'));
    }

}
