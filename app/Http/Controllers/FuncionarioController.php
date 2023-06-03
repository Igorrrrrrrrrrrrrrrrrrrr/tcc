<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Ponto;
use DateTime;
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
        
        $horarioentrada= DateTime::createFromFormat('H:i:s', $entrada_hoje);
        $horarioalmoco= DateTime::createFromFormat('H:i:s', $almoco_hoje);

        
        if (isset($horarioentrada)) {
            $turnomanha = $horarioentrada->diff($horarioalmoco);
            $turnomanha = $turnomanha->format('%H:%I:%S');
    
            } else{
            $turnomanha = "Ponto não batido";
        }

        if ($horarioentrada !== false) {
            $diferenca = $horarioalmoco - $horarioentrada;
            $horas = floor($diferenca / 3600);
            $minutos = floor(($diferenca % 3600) / 60);
            $segundos = $diferenca % 60;
            $turnomanha = sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos);
        } else {
            $turnomanha = "Ponto não batido";
        }


        

        return view("registro_ponto", [
            'entrada_hoje' => $entrada_hoje,
            'almoco_hoje' => $almoco_hoje,
            'volta_hoje' => $volta_hoje,
            'saida_hoje' => $saida_hoje,
            'turnomanha' => $turnomanha,
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

    public function historico()
    {
        return view("historico");
    }


}


