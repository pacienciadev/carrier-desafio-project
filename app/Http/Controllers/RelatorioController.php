<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Controllers\Controller;
use DB;

class RelatorioController extends Controller
{
    public function relatorio()
    {
        $quantidade_total = DB::table('funcionarios')->count();
        //Selecionando o número de funcionários
        $funcionarios_masculino = DB::table('funcionarios')
                                    ->where('gender', '=' ,'M')
                                    ->count();
        //Selecionando o número de funcionárias
        $funcionarios_feminino = DB::table('funcionarios')
                                    ->where('gender', '=' ,'F')
                                    ->count();
        //Calculando a média de Idade
        $media_idade = DB::table('funcionarios')
                                    ->avg('age');
        //Pegando a idade do funcionário mais novo
        $mais_novo = DB::table('funcionarios')
                                    ->min('age');
        //Pegando a idade do funcionário mais velho
        $mais_velho = DB::table('funcionarios')
                                    ->max('age');                          
        return view('relatorios.index', compact('quantidade_total', 'funcionarios_masculino', 'funcionarios_feminino', 'media_idade', 'mais_novo', 'mais_velho'));
    }

    public function json_dados()
    {
        $funcionarios = Funcionario::all();
        return $funcionarios;
    }
}

