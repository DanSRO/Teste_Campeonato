@extends('layout.layout')
@section('title', 'Campeonatos Index')
@section('content')
    <h1>Lista de Campeonatos</h1>

    @foreach($campeonatos as $campeonato)
        <a href="{{ route('campeonatos.index', $campeonato->id) }}">
        <p>Código do Campeonato: {{ $campeonato->codigo }}</p>
        <p>Título: {{ $campeonato->titulo }}</p>
        <P><img src="{{asset('imgs/'.$campeonato->imagem)}}" alt="campeonato-imagem"></P>
        <p>Cidade e Estado: {{ $campeonato->cidade_estado }}</p>
        <p>Data de Realização: {{ $campeonato->data_realizacao}}</p>
        <p>Sobre o Evento: {{ $campeonato->sobre_evento}}</p>
        <p>Ginásio: {{ $campeonato->ginasio}}</p>
        <p>Informações Gerais: {{ $campeonato->informacoes_gerais}}</p>
        <p>Entrada Público: {{$campeonato->entrada_publico}}</p>
        <p>Tipo: {{$campeonato->tipo}}</p>
        <p>Fase: {{$campeonato->fase}}</p>
        <p>Status: {{$campeonato->status}}</p>
        <br>
        </a>
        <br>
    @endforeach
@endsection