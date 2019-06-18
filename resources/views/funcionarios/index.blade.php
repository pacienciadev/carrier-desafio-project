@extends('layouts.app')

@section('title', 'Lista de Funcionários')

@section('content')

@foreach ($funcionarios as $funcionario)
{{ $funcionario->name }}
    
@endforeach
    
@endsection