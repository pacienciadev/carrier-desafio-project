@extends('layouts.app')

@section('title', 'Relatório')

@section('content')

{{-- Mensagem de sucesso --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
{{-- Mensagem de sucesso vermelha --}}
@if (session('red-success'))
    <div class="alert alert-danger">
        {{ session('red-success') }}
    </div>
@endif

<h1>Relatórios</h1>
<hr>
<div class="row">
    <ul class="list-group col-md-4">
        <li class="list-group-item d-flex justify-content-between align-items-center">
           <strong>Quantidade de Funcionários</strong>
            <span class="badge badge-primary badge-pill">{{ $quantidade_total }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Homens
            <span class="badge badge-success badge-pill">{{ $funcionarios_masculino }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Mulheres
            <span class="badge badge-danger badge-pill">{{ $funcionarios_feminino }}</span>
        </li>
    </ul>
    @php
    if($quantidade_total !== 0){
        //Regra de 3 para o gráfico masculino
        $porcentagem_masc = (100*$funcionarios_masculino)/$quantidade_total;
        //Regra de 3 para o gráfico Feminino
        $porcentagem_fem = (100*$funcionarios_feminino)/$quantidade_total;
    }else {
        $porcentagem_masc = 0;
        $porcentagem_fem = 0;
    }   
    @endphp
    <ul class="list-group col-md-8">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Gráfico</strong> 
        </li>
        <li class="list-group-item" style="height: 50px">
            <small><strong>{{ $porcentagem_masc }}% - Masculino</strong></small>
            <div class="progress" style="height: 4.5px">
               <div class="progress-bar bg-success" role="progressbar" style="width: {{ $porcentagem_masc }}%" aria-valuenow="{{ $porcentagem_masc }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </li>
        <li class="list-group-item" style="height: 50px">
            <small><strong>{{ $porcentagem_fem }}% - Feminino</strong></small>
            <div class="progress" style="height: 5px">
                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $porcentagem_fem }}%" aria-valuenow="{{ $porcentagem_fem }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </li>
    </ul>
</div>
<br>

@php
//Deixando a média de idade em um valor INT
$m_idade = (int) $media_idade;
@endphp

<div class="row">
    <ul class="list-group col-md-5">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Média de Idade</strong>
            <span class="badge badge-primary badge-pill">{{ $media_idade }} anos</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Valor Inteiro
            <span class="badge badge-warning badge-pill">{{ $m_idade }} anos</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            A Idade do Funcionário Mais Novo
            <span class="badge badge-secondary badge-pill">{{ $mais_novo }} anos</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            A Idade do Funcionário Mais Velho
            <span class="badge badge-dark badge-pill">{{ $mais_velho }} anos</span>
        </li>
    </ul>
</div>
    
@endsection