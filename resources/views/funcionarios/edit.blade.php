@extends('layouts.app')

@section('title', 'Editar Funcionário')

@section('content')

<!-- Formulário de Cadastro -->
    <h1>Editar Informações</h1>
    <h6>Você está editando o usuário: <strong> {{ $funcionario->name }} {{ $funcionario->lastname }} </strong></h6>
    <hr>
        <form method="POST" action="/funcionarios/{{ $funcionario->id }}">
            @method('PUT')
            @csrf
            <!-- NOME & SOBRENOMENOME -->
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="name" class="col-form-label">Nome</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        id="name" 
                        value="{{ $funcionario->name }}">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="col-form-label">Sobrenome</label>
                    <input
                        type="text" 
                        class="form-control" 
                        name="lastname" 
                        id="lastname" 
                        value="{{ $funcionario->lastname }}">
                </div>
            </div>
            <!-- IDADE & sexo -->
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="age" class="col-sm-1-12 col-form-label">Idade</label>
                    <input
                        type="number"
                        class="form-control"
                        name="age"
                        id="age"
                        value="{{ $funcionario->age }}">
                </div>
                <div class="col-md-6">
                    <label for="gender" class="col-sm-1-12 col-form-label">Sexo</label>
                    <select class="form-control" name="gender" id="gender">
                        @php
                        switch ($funcionario->gender) {
                            case 'M':
                                echo '
                                    <option value="M" selected="selected">Masculino</option>
                                    <option value="F">Feminino</option>
                                ';
                                break;
                            
                            default:
                                echo '
                                    <option value="M">Masculino</option>
                                    <option value="F" selected="selected">Feminino</option>
                                    ';
                                break;
                        }
                        @endphp
                        
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success btn-sm"> <i class="fas fa-edit"></i> Atualizar Informações </button>
            </div>
        </form>
    
@endsection