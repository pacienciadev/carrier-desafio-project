@extends('layouts.app')

@section('title', 'Perfil do Funcionário')

@section('content')

{{-- MENSAGEM DE SUCESSO --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>{{ $funcionario->name }} {{ $funcionario->lastname }}</h1>
<hr>

@php
//Definindo a escrita do sexo.
$funcionario->gender === "M" ? $sexo = 'Masculino' : $sexo = 'Feminino';
//Aproveitando para armazenar e formatar a data
$data_completa = $funcionario->created_at;
$data = $data_completa->format('d/m/Y H:i');
@endphp

{{-- INFORMAÇÕES DO USUÁRIO --}}
<h3>Idade: <span class="text-secondary"> {{ $funcionario->age }} anos</span></h3>
<h3>Sexo: <span class="text-secondary"> {{ $sexo }}</span></h3>
<hr>
<h5>Data de Registro no Sistema <br><span class="text-secondary"> {{ $data }}</span></h5>
<hr>
<div>
    <a href="/funcionarios/{{ $funcionario->id }}/edit" title="Editar Usuário">
        <button class="btn btn-outline-primary btn-sm"> <i class="fas fa-edit"></i> Editar Informações </button>
    </a>
    <form action="/funcionarios/{{ $funcionario->id }}" class="float-right" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-outline-danger btn-sm"> <i class="fas fa-trash-alt"></i>  Apagar Usuário</button>
    </form>
</div>
    
@endsection