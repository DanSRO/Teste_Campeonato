@extends('layout.layout')
@section('title', 'Detalhes do Campeonato')
@section('content')
    <!-- <main class="max-w-7xl mx-2 lg:mx-auto text-gray-900" x-data="{active: 'sobre_evento'}"> -->
    <main class="max-w-7xl mx-2 lg:mx-auto text-gray-900" x-data="{ activeTab: 'sobre_evento' }">    
        <!-- Imagem do Campeonato -->
        <img src="{{ asset('imgs/' . $campeonatos->imagem) }}" alt="Imagem do torneio" class="rounded-md h-[500px] w-full object-cover">

        <!-- Detalhes do Campeonato -->
        <time datetime="{{$campeonatos->data_realizacao}}" class="block mt-4 text-gray-500"
        >{{ \Carbon\Carbon::parse($campeonatos->data_realizacao)->locale('pt_BR')->format('d-m-Y') }}</time
      >
        <h1 class="my-1 font-bold text-5xl text-blue-800 flex flex-col lg:flex-row lg:items-center gap-2">
            {{ $campeonatos->titulo }}
            <span class="text-gray-500 font-normal text-3xl">#{{ $campeonatos->codigo }}</span>
        </h1>

        <!-- Local e Tipo do Campeonato -->
        <div class="flex gap-2">
            <p class="text-gray-500 flex gap-2 my-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <!-- Ícone para Local -->
                </svg>
                {{ $campeonatos->cidade_estado }}
            </p>
            <p class="text-gray-500 flex gap-2 my-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <!-- Ícone para Tipo -->
                </svg>
                {{ $campeonatos->tipo }}
            </p>
        </div>

        <!-- Abas do Campeonato -->
        <ul class="flex flex-wrap font-medium text-center text-gray-500 border-b border-gray-200">
    <li class="mb-4 mr-4">
        <button @click="activeTab = 'sobre_evento'" :class="{ 'border-b-2': activeTab === 'sobre_evento' }">Sobre o evento</button>
    </li>
    <li class="mb-4 mr-4">
        <button @click="activeTab = 'ginasio'" :class="{ 'border-b-2': activeTab === 'ginasio' }">Ginásio</button>
    </li>
    <li class="mb-4 mr-4">
        <button @click="activeTab = 'infos_gerais'" :class="{ 'border-b-2': activeTab === 'infos_gerais' }">Informações Gerais</button>
    </li>
    <li class="mb-4 mr-4">
        <button @click="activeTab = 'entrada_publico'" :class="{ 'border-b-2': activeTab === 'entrada_publico' }">Entrada ao Público</button>
    </li>
</ul>

    <!-- Conteúdos das abas -->
    <article class="mt-4 pb-4 border-b border-blue-700/20" x-show="activeTab === 'sobre_evento'">
        <div class="mt-4 text-lg">
            {{ $campeonatos->sobre_evento }}
        </div>
    </article>

    <article class="mt-4 pb-4 border-b border-blue-700/20" x-show="activeTab === 'ginasio'">
        <div class="mt-4 text-lg">
            {{ $campeonatos->ginasio }}
        </div>
    </article>

    <article class="mt-4 pb-4 border-b border-blue-700/20" x-show="activeTab === 'infos_gerais'">
        <div class="mt-4 text-lg">
            {{ $campeonatos->informacoes_gerais }}
        </div>
    </article>

    <article class="mt-4 pb-4 border-b border-blue-700/20" x-show="activeTab === 'entrada_publico'">
        <div class="mt-4 text-lg">
            {!! $campeonatos->entrada_publico !!}
        </div>
    </article>

        <!-- Botões de Ação -->
        <div class="mt-8 flex justify-center">
            <a href="{{ route('campeonatos.create') }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                Inscreva-se agora mesmo
            </a>
        </div>        
      <div class="mt-8 flex justify-center">
        <a
          href="{{ route('campeonatos.create') }}"
          class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800"
        >
          Fique por dentro do chaveamento
        </a>
      </div>
      <div class="mt-8 flex justify-center">
        <a
          href="{{route('resultado')}}"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
          Veja os resultados
        </a>
      </div>
    </main>

@endsection