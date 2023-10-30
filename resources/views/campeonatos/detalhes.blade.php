<h1>Detalhes do campeonato</h1>


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
