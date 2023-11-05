@extends('layout.layout')
@section('title', 'Detalhes do Atleta')]
@section('content')
<h1>Detalhes do Atleta</h1>
@foreach($atletas as $atleta)
<a href="{{ route('atletas.show', $atleta->id) }}">
    
        {{ $atleta->nome }}
        {{ $atleta->cpf }}
        {{ $atleta->sexo }}
        {{ $atleta->email }}
        {{ $atleta->senha }}
        {{ $atleta->data_nascimento}}
        {{ $atleta->faixa}}
        {{ $atleta->peso}}
        {{ $atleta->data_inscricao}}        
@endforeach    
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
