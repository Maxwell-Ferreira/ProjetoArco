<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContato;

class ContatoController extends Controller
{

    private $email;

    public function index(){
        return view('contato');
    }

    public function store(Request $request){
        $retorno = array();
        $retorno['status'] = 1;

        if(empty($request->input('nome')) || empty($request->input('email')) || 
            empty($request->input('telefone')) || empty($request->input('mensagem'))){
                $retorno['status'] = 0;
                $retorno['msg'] = "Favor preencha todos os campos!";
        }else{
            $contato = new Contato;
            $contato->nome = $request->input('nome');
            $contato->email = $request->input('email');
            $contato->telefone = $request->input('telefone');
            $contato->mensagem = $request->input('mensagem');
            $contato->save();

            Mail::to($request->input('email'))->send(new MailContato($contato));

            $retorno['msg'] = "Mensagem Enviada!";
        }

        return(json_encode($retorno));
    }
}
