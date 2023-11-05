@extends('layout.layout')
@section('title', 'Cadastrar Atleta')
@section('content')
<section class="relative h-[300px]">
      <img
        src="{{asset('imgs/integra.jpg')}}"
        alt="Lutadores de Jiu jitsu executam golpe durante treino"
        class="w-full h-full object-cover"
      />
      <div class="bg-black/70 grid place-items-center absolute inset-0">
        <div>
        @isset($campeonatos)
      <!-- Se a variável $campeonatos estiver definida -->
      <select name="campeonato_id" id="campeonato_id">
          @foreach($campeonatos as $campeonato)
              <option value="{{ $campeonato->id }}">{{ $campeonato->titulo }}</option>
          @endforeach
      </select>
      @else
          <!-- Se a variável $campeonatos não estiver definida -->
          <p>Nenhum campeonato disponível.</p>
      @endisset
          <div class="flex gap-2 justify-center text-sm">
            <p class="text-white flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5"
                />
              </svg>
              241223
            </p>
            <p class="text-white flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 6h.008v.008H6V6z"
                />
              </svg>
              Kimono
            </p>
            <p class="text-white flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                />
              </svg>
              Santos-SP
            </p>
            <p class="text-white flex items-center gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                />
              </svg>@foreach ($atletas as $atleta)
                      <time datetime="{{ $atleta->data_inscricao }}">{{ $atleta->data_inscricao }}</time>
                    @endforeach
            </p>
          </div>
        </div>
      </div>
    </section>
    <a href="{{route('atletas.create')}}"></a>
    <main class="max-w-7xl mx-2 lg:mx-auto">
        <form method="POST" action="{{route('atletas.store')}}" class="py-12">
        @csrf
            <h2 class="text-center text-3xl text-blue-700 mt-4 mb-8">
                Formulário de inscrição para o torneio
            </h2>            
            <div class="flex gap-4">                
                <div class="w-full">
                    <label for="nome" class="block mb-2 text-lg font-medium">Nome</label>
                    <input
                        name="nome"
                        type="text"
                        id="nome"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Seu nome"
                        required
                    />
                </div>
                <div class="w-full">
                    <label for="nascimento" class="block mb-2 text-lg font-medium">Data de nascimento</label>
                    <input
                        name="data_nascimento"
                        type="date"
                        id="nascimento"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required
                    />
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <div class="w-full">
                    <label for="cpf" class="block mb-2 text-lg font-medium">CPF</label>
                    <input
                        name="cpf"
                        type="cpf"
                        id="cpf"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Seu CPF"
                        required
                    />
                </div>
                <div class="w-full">
                    <label for="sexo" class="block mb-2 text-lg font-medium">Sexo</label>
                    <input
                        name="sexo"
                        type="text"
                        id="sexo"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Gênero"
                        required
                    />
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <div class="w-full">
                    <label for="email" class="block mb-2 text-lg font-medium">Email</label>
                    <input
                        name="email"
                        type="email"
                        id="email"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Seu Email"
                        required
                    />
                </div>
                <div class="w-full">
                    <label for="senha" class="block mb-2 text-lg font-medium">Senha</label>
                    <input
                        name="senha"
                        type="password"
                        id="senha"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Sua Senha"
                        required
                    />
                </div>
                <div class="w-full">
                    <label for="senha_confirmation" class="block mb-2 text-lg font-medium">Confirme sua Senha</label>
                    <input
                        name="senha_confirmation"
                        type="password"
                        id="senha_confirmation"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Confirme sua Senha"
                        required
                    />
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <div class="w-full">
                    <label for="equipe" class="block mb-2 text-lg font-medium">Equipe</label>
                    <input
                        name="equipe"
                        type="text"
                        id="equipe"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Sua Equipe"
                        required
                    />
                </div>
                <div class="w-full">
                    <label for="faixa" class="block mb-2 text-lg font-medium">Faixa</label>
                    <input
                        name="faixa"
                        type="text"
                        id="faixa"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Sua Faixa"
                        required
                    />
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <div class="w-full">
                    <label for="peso" class="block mb-2 text-lg font-medium">Peso</label>
                    <select
                        name="peso"
                        type="text"
                        id="peso"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required
                    >
                        <option value="Leve">Leve</option>
                        <option value="Pesado">Pesado</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="inscricao" class="block mb-2 text-lg font-medium">Data de Inscrição</label>
                    <input
                        name="data_inscricao"
                        type="date"
                        id="inscricao"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Sua Data de inscrição"
                        required
                    />
                </div>
            </div>
            <div class="mt-8 flex justify-center">
                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                >
                    Inscreva-se agora mesmo
                </button>
            </div>
        </form>
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
    @endsection