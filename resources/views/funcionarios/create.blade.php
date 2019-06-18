@extends('layouts.app')

@section('title', 'Novo Funcinário')

@section('content')

<!-- Formulário de Cadastro -->
    <h1>Cadastrar novo funcionário</h1>
        <form method="POST" action="/funcionarios">
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
                        placeholder="Digite o primeiro nome do funcionário.">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="col-form-label">Sobrenome</label>
                    <input
                        type="text" 
                        class="form-control" 
                        name="lastname" 
                        id="lastname" 
                        placeholder="Digite o sobrenome do funcionário.">
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
                        placeholder="Digite a idade do funcionário.">
                </div>
                <div class="col-md-6">
                    <label for="gender" class="col-sm-1-12 col-form-label">Sexo</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="null"> -- Selecione uma Opção -- </option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    
@endsection