{{--@extends('layouts.app') 

@section('content')--}}
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
{{--@endsection--}}