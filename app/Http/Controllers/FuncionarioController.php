<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Ponto;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function loginView()
    {
        return view("login_funcionario");
    }

    public function registroPontoView()
    {
        return view("registro_ponto");
    }


    public function login(Request $request)
    {
        $cpf = $request->input('cpf');
        $senha = $request->input('senha');

        $funcionario = Funcionario::where('cpf', $cpf)->where('senha', $senha)->first();

        if ($funcionario) {
            session()->put('funcionario', $funcionario);
            return redirect('/funcionario/ponto'); // O dado existe
         } else {
            return redirect()->back()->withErrors(['login' => 'Está errado seu burro.']); // O dado não existe
         }

    }

    public function registro(int $tipo)
    {
        $ponto = new Ponto();
        $ponto->tipo = $tipo;
        $ponto->data_hora = date("Y-m-d H:i:s");
        $ponto->id_funcionario = session()->get('funcionario')->id;
        $ponto->save();
        return redirect('/funcionario/ponto');
    }

    public function observacao()
    {
        return view("observacao");
    }


}


