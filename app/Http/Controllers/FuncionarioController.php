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
        $hoje = date('Y-m-d');
        $horas = date('H:i', strtotime($hoje));
       
        $id_funcionario = session()->get('funcionario')->id;

        $entrada_hoje = Ponto::where('tipo',1)->where('id_funcionario',$id_funcionario)->where('data_hora','like',"$hoje%")->first();
        $almoco_hoje = Ponto::where('tipo',2)->where('id_funcionario',$id_funcionario)->where('data_hora', 'like',"$hoje%")->first();
        $volta_hoje = Ponto::where('tipo',3)->where('id_funcionario',$id_funcionario)->where('data_hora','like',"$hoje%")->first();
        $saida_hoje = Ponto::where('tipo',4)->where('id_funcionario',$id_funcionario)->where('data_hora','like',"$hoje%")->first();

        return view("registro_ponto", [
            'entrada_hoje' => $entrada_hoje,
            'almoco_hoje' => $almoco_hoje,
            'volta_hoje' => $volta_hoje,
            'saida_hoje' => $saida_hoje,
        ]);

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


