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



    
@endsection