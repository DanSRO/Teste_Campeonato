@extends('layout.layout')
@section('title', 'Cadastro de campeonatos')
@section('content')
    
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
@endsection