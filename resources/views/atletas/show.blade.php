@extends('layouts.app')

@section('content')
    <h1>Lista de Atletas</h1>

    @foreach($atletas as $atleta)
       
            {{ $atleta->nome }}
            {{ $atleta->cpf }}
            {{ $atleta->sexo }}
            {{ $atleta->email }}
            {{ $atleta->senha }}
            {{ $atleta->data_nascimento}}
            {{ $atleta->faixa}}
            {{ $atleta->peso}}
            {{ $atleta->data_inscricao}}
        
        <br>
    @endforeach
@endsection