{{--@extends('layouts.app') 

@section('content')--}}
<a href="{{route('atletas.create')}}"></a>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-white">Cadastrar Campeonato</h2>

                    <!-- Se houver erros de validação, exiba aqui -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('campeonatos.store') }}" method="POST">
                        @csrf

                        <label for="titulo" class="block mt-4 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Título do Evento
                        </label>
                        <input type="text" name="titulo" id="titulo" class="form-input w-full mt-1" />

                        <!-- Demais campos aqui -->

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
{{--@endsection--}}