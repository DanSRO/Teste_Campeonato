{{--@extends('layouts.app')

@section('content')--}}
    <h1>Lista de Atletas</h1>

    @foreach($atletas as $atleta)
            <p>Código do Atleta: {{$atleta->codigo}}</p>       
            <p>Nome: {{ $atleta->nome }}</p>
            <p>CPF: {{ $atleta->cpf }}</p>
            <p>Sexo: {{ $atleta->sexo }}</p>
            <p>Email: {{ $atleta->email }}</p>          
            <p>Data de Nascimento: {{ $atleta->data_nascimento}}</p>
            <p>Faixa: {{ $atleta->faixa}}</p>
            <p>Peso: {{ $atleta->peso}}</p>
            <p>Data de Inscrição: {{ $atleta->data_inscricao}}</p>        
        <br>
    @endforeach
{{--@endection--}}