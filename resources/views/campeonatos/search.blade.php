<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Patua+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Roboto", sans-serif;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      [data-calendar] {
        font-family: "Patua One", serif;
      }
      #logo {
        text-transform: uppercase;
        font-size: 1.5rem;
        font-weight: bold;
        margin-left: 5px;
      }
      .debug {
        outline: 1px solid red;
      }
    </style>
    <title>Campeonato de Jiu Jitsu</title>
  </head>
  <body>
    <header>
      <nav class="bg-white border-gray-200">
        <div
          class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
          <a href="/" class="flex items-center">
            <img src="imgs/logo.svg" alt="Logo" />
            <p id="logo">OSU BJJ</p>
          </a>
          <button
            data-collapse-toggle="navbar-default"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default"
            aria-expanded="false"
          >
            <span class="sr-only">Abrir menu principal</span>
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
              class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:items-center md:space-x-8 md:mt-0 md:border-0 md:bg-white"
            >
              <li>
                <a
                  href="/"
                  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                  >Início</a
                >
              </li>
              <li>
                <a
                  href="./torneios.html"
                  class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                  aria-current="page"
                  >Torneios</a
                >
              </li>
              <li>
                <a
                  href="./area_atleta/area_restrita.html"
                  class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center"
                >
                  Área do competidor
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
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
    <form action="{{ route('campeonatos.search') }}" method="get" enctype="multipart/form-data"
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
          <option value="SP">São Paulo</option>
          <option value="RJ">Rio de Janeiro</option>
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
        <article
          class="relative w-full rounded-xl overflow-hidden shadow-xl p-2 outline outline-1 outline-gray-400 text-gray-900 hover:-translate-y-2 transition-transform duration-300"
        >
        @foreach($resultados as $campeonato)
    <article class="relative w-full rounded-xl overflow-hidden shadow-xl p-2 outline outline-1 outline-gray-400 text-gray-900 hover:-translate-y-2 transition-transform duration-300">
        <a href="{{route('campeonatos.search')}}"></a>
        <h1>Lista de Campeonato Em Destaque</h1>
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
    </article>
@endforeach
    </main>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <footer
      class="rounded-lg shadow max-w-7xl m-4 md:mx-auto md:mt-4 outline outline-1 outline-gray-300"
    >
      <div
        class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between"
      >
        <span class="text-sm text-gray-500 sm:text-center"
          >© 2023 <a href="/" class="hover:underline">OSU BJJ</a>. Todos os
          direitos reservados.
        </span>
        <ul
          class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0"
        >
          <li>
            <a href="./index.html" class="mr-4 hover:underline md:mr-6"
              >Início</a
            >
          </li>
          <li>
            <a href="./torneios.html" class="mr-4 hover:underline md:mr-6"
              >Torneios</a
            >
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6"
              >Área do competidor</a
            >
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6"
              >Política de privacidade</a
            >
          </li>
        </ul>
      </div>
    </footer>
  </body>
</html>
