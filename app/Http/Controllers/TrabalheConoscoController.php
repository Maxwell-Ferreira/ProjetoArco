<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Sexo;
use App\EstadoCivil;
use App\Curriculo;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailCurriculo;

class TrabalheConoscoController extends Controller
{
    public function index($dados = null){
        $estados = Estado::all();
        $sexos = Sexo::all();
        $estadosCivis = EstadoCivil::all();
        return view('trabalheConosco')->with('estados', $estados)->with('sexos', $sexos)->with('estadosCivis', $estadosCivis)->with('dados', $dados);
    }

    public function store(Request $request){
        $retorno = array();
        $retorno['color'] = "#15b000";
        //$path = $request->file('curriculo')->store('curriculos', 'public');

         if(empty($request->input('nome')) || empty($request->input('email')) || 
            empty($request->input('cidade')) || empty($request->input('estado')) || 
            empty($request->input('sexo')) || empty($request->input('estadoCivil')) || 
            empty($request->input('dataNascimento')) || empty($request->file('curriculo')) ||
            empty($request->input('observacoes')) || empty($request->input('vaga'))){
                $retorno['color'] = "#e00000";
                $retorno['msg'] = "Favor preencha todos os campos!";
        }else{
            $path = $request->file('curriculo')->store('curriculos', 'public');
            $curriculo = new Curriculo;
            $curriculo->nome = $request->input('nome');
            $curriculo->email = $request->input('email');
            $curriculo->cidade = $request->input('cidade');
            $curriculo->estado_id = $request->input('estado');
            $curriculo->sexo_id = $request->input('sexo');
            $curriculo->estado_civil_id = $request->input('estadoCivil');
            $curriculo->nascimento = $request->input('dataNascimento');
            $curriculo->vaga = $request->input('vaga');
            $curriculo->curriculo = $path;
            $curriculo->observacoes = $request->input('observacoes');
            $curriculo->save();

            Mail::to($request->input('email'))->send(new MailCurriculo($curriculo));

            $retorno['msg'] = "Curriculo Enviado!";
        }

        return $this->index($retorno);
    }
}
