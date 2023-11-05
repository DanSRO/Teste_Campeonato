@extends('layout.layout')
@section('title', 'Busca de Campeonato')
@section('content')
    <div class="bg-blue-700">
      <div
        class="relative grid place-items-center max-w-7xl w-full mx-2 lg:mx-auto min-h-[200px]"
      >
        <div>
          <nav class="flex md:absolute left-0" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <a
                  href="#"
                  class="inline-flex items-center text-sm font-medium text-white hover:text-blue-200"
                >
                  <svg
                    class="w-3 h-3 mr-2.5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                    />
                  </svg>
                  Início
                </a>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg
                    class="w-3 h-3 text-gray-100 mx-1"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 6 10"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 9 4-4-4-4"
                    />
                  </svg>
                  <span class="ml-1 text-sm font-medium text-gray-100 md:ml-2"
                    >Torneios</span
                  >
                </div>
              </li>
            </ol>
          </nav>
          <h1 class="uppercase text-center text-white text-4xl">Torneios</h1>
        </div>
      </div>
    </div>
    <form action="{{ route('busca.campeonatos') }}" method="get" enctype="multipart/form-data"
      class="rounded-lg shadow max-w-7xl m-4 md:mx-auto md:mt-4 outline outline-1 outline-gray-300 p-4 flex flex-col lg:flex-row gap-2"
    >
    @csrf
      <div class="flex-1">
        <label
        name="titulo"
          for="Título do evento"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Título do evento</label
        >
        <input
        name="titulo"
          type="text"
          id="Título do evento"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Nome do evento"
          required
        />
      </div>      
      <div>
        <label for="estado" class="block mb-2 text-sm font-medium text-gray-900"
          >Cidade/Estado</label
        >
        <select
          id="cidade_estado"
          name="cidade_estado"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        >
          <option selected value="none">Escolha um estado</option>
          <option value="Fortaleza, Ceará">Fortaleza, Ceará</option>
        </select>
      </div>      
      <div>
        <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900"
          >Tipo</label
        >
        <select
        name="tipo"
          id="tipo"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        >
          <option selected value="none">Escolha um tipo</option>
          <option value="kimono">Kimono</option>
          <option value="no-gi">No Gi</option>
        </select>
      </div>      
      <div class="flex items-end">
        <button
          type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5"
        >
          Buscar
        </button>
      </div>
    </form>
    <main>    
    <div class="grid lg:grid-cols-4 gap-3 max-w-7xl mx-2 lg:mx-auto">
        @foreach($resultados as $campeonato)
            <article class="relative w-full rounded-xl overflow-hidden shadow-xl p-2 outline outline-1 outline-gray-400 text-gray-900 hover:-translate-y-2 transition-transform duration-300">
                <a href="{{ route('detalhes.campeonatos', $campeonato->id) }}">
                    <h2>Código do Campeonato: {{ $campeonato->codigo }}</h2>
                    <h3>Título: {{ $campeonato->titulo }}</h3>
                    <p><img src="{{ asset('imgs/' . $campeonato->imagem) }}" alt="Imagem do campeonato"></p>
                    <p>Cidade e Estado: {{ $campeonato->cidade_estado }}</p>
                    <p>Data de Realização: {{ \Carbon\Carbon::parse($campeonato->data_realizacao)->translatedFormat('l, j \d\e F') }}</p>
                    <p>Sobre o Evento: {{ $campeonato->sobre_evento }}</p>
                    <p>Ginásio: {{ $campeonato->ginasio }}</p>
                    <p>Informações Gerais: {{ $campeonato->informacoes_gerais }}</p>
                    <p>Entrada Público: {!! $campeonato->entrada_publico !!}</p>
                    <p>Tipo: {{ $campeonato->tipo }}</p>
                    <p>Fase: {{ $campeonato->fase }}</p>
                    <p>Status: {{ $campeonato->status }}</p>
                </a>
            </article>
        @endforeach
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</main>
@endsection    
