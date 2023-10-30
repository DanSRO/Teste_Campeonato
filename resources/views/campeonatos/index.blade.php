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
        <a href="{{ route('campeonatos.show', $campeonato->id) }}">
            {{ $campeonato->titulo }}
        </a>
        <br>
    @endforeach
</body>
</html>