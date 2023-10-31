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
    
<a href="{{route('campeonatos.create')}}"></a>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-white">Cadastrar Campeonato</h2>
                    
                    <form action="{{ route('campeonatos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label for="titulo" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Título do Evento
                        </label>
                        <input type="text" name="titulo" id="titulo" class="form-input w-full mt-1" />
                        
                        <label for="imagem" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Imagem do Evento
                        </label>
                        <input type="file" name="imagem" id="imagem" class="form-input w-full mt-1" />
                        
                        <label for="cidade_estado" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Cidade/Estado
                        </label>
                        <input type="text" name="cidade_estado" id="cidade_estado" class="form-input w-full mt-1" />

                        <label for="data_realizacao" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Data de Realização
                        </label>
                        <input type="date" name="data_realizacao" id="data_realizacao" class="form-input w-full mt-1" />

                        <label for="sobre_evento" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Sobre o Evento
                        </label>
                        <input type="text" name="sobre_evento" id="sobre_evento" class="form-input w-full mt-1" />

                        <label for="ginasio" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Ginásio
                        </label>
                        <input type="text" name="ginasio" id="ginasio" class="form-input w-full mt-1" />

                        <label for="informacoes_gerais" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Informações Gerais
                        </label>
                        <input type="text" name="informacoes_gerais" id="informacoes_gerais" class="form-input w-full mt-1" />

                        <label for="entrada_publico" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Entrada Público
                        </label>
                        <input type="text" name="entrada_publico" id="entrada_publico" class="form-input w-full mt-1" />

                        <label for="tipo" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Tipo do Evento
                        </label>
                        <input type="text" name="tipo" id="tipo" class="form-input w-full mt-1" />

                        <label for="fase" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Fase do Evento
                        </label>
                        <input type="text" name="fase" id="fase" class="form-input w-full mt-1" />

                        <label for="status" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Status
                        </label>
                        <input type="text" name="status" id="status" class="form-input w-full mt-1" />

                        <label for="destaque" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Destaque do Evento
                        </label>
                        <input type="text" name="destaque" id="destaque" class="form-input w-full mt-1" />
                    <!-- Se houver erros de validação, exibir -->
                    @if ($errors->any())
                                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <div class="mt-4">
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                Cadastrar Campeonato
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer
      class="bg-white rounded-lg shadow max-w-7xl m-4 md:mx-auto md:mt-4 outline outline-1 outline-gray-300"
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
            <a href="/" class="mr-4 hover:underline md:mr-6"
              >Início</a
            >
          </li>
          <li>
            <a href="{{route('campeonatos.index')}}" class="mr-4 hover:underline md:mr-6"
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
