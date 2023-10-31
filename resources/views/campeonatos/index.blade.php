<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonatos</title>
</head>
<body>
    <h1>Lista de Campeonatos</h1>

    @foreach($campeonatos as $campeonato)
        <a href="{{ route('campeonatos.index', $campeonato->id) }}">
        <p>Código do Campeonato: {{ $campeonato->codigo }}</p>
        <p>Título: {{ $campeonato->titulo }}</p>
        <img src="{{asset($caminhoImagem)}}" alt="campeonato-infantil">
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
</body>
</html>