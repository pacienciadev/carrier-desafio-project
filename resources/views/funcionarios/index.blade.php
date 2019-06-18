@extends('layouts.app')

@section('title', 'Lista de Funcionários')

@section('content')

<h1>Lista de Funcionários <a href="/funcionarios/create"><button class="btn btn-outline-primary btn-sm float-right" type="button"><i class="fas fa-user-plus"></i> Adcionar Funcionário</button></a></h1>


<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">Idade</th>
        <th scope="col">Sexo</th>
        <th scope="col">Dia do Cadastro</th>
        <th scope="col">Opções</th>
        <th scope="col"></th>
        </tr>
    </thead>
    
    {{-- Atribuindo as informações para poder usa-las --}}
    @foreach ($funcionarios as $funcionario)
        <tbody>
            <th scope="row">{{ $funcionario->id }}</th>
            <td>{{ $funcionario->name }}</td>
            <td>{{ $funcionario->lastname }}</td>
            <td>{{ $funcionario->age }}</td>
            
            @php
            //Definindo a escrita do sexo.
            $funcionario->gender === "M" ? $sexo = 'Masculino' : $sexo = 'Feminino';
            //Aproveitando para armazenar e formatar a data
            $data_completa = $funcionario->created_at;
            $data = $data_completa->format('d/m/Y H:i');
            @endphp
            
            <td>{{ $sexo }}</td>
            <td>{{ $data }}</td>
            <td>
                <a href="/funcionarios/{{ $funcionario->id }}" data-toggle="tooltip" data-placement="top" title="Visualizar Perfil">
                    <button class="btn btn-outline-secondary btn-sm"> <i class="fas fa-eye"></i> </button>
                </a>
                <a href="/funcionarios/{{ $funcionario->id }}/edit" data-toggle="tooltip" data-placement="top" title="Editar Usuário">
                    <button class="btn btn-outline-primary btn-sm"> <i class="fas fa-edit"></i> </button>
                </a>
            </td>
            <td>
                <form action="/funcionarios/{{ $funcionario->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Apagar Usuário"> <i class="fas fa-trash-alt"></i> </button>
                </form>
            </td>
        <tr>
        @endforeach
    </tbody>
</table>

@php
//Aviso caso não exista informações no array
    if($funcionarios == '[]'){
        echo 
        '<div class="alert alert-warning" role="alert">
            Não existe nenhum funcionário cadastrado.
        </div>';
    }
@endphp
    
@endsection