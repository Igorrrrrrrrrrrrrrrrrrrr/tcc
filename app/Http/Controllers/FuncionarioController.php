<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
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

        if (Funcionario::where('cpf', $cpf)->exists()) {
            return redirect('/funcionario/login'); // O dado existe
         } else {
            return false; // O dado não existe
         }

        dd($cpf, $senha);
    }
}
