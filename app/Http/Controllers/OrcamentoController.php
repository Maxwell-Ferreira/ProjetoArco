<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frete;
use App\Orcamento;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailOrcamento;

class OrcamentoController extends Controller
{
    public function index(){
        $fretes = Frete::all();
        return view('orcamento')->with('fretes', $fretes);
    }

    public function store(Request $request){

        $retorno = array();
        $retorno['status'] = 1;

        if(empty($request->input('rementente')) || empty($request->input('contato')) || 
            empty($request->input('email')) || empty($request->input('telefone')) || 
            empty($request->input('cidadeOrigem')) || empty($request->input('pesoReal')) || 
            empty($request->input('qtdVolumes')) || empty($request->input('tipoMercadoria')) || 
            empty($request->input('cubagem')) || empty($request->input('comprimento')) || 
            empty($request->input('altura')) || empty($request->input('largura')) || 
            empty($request->input('valor')) || empty($request->input('destinatario')) || 
            empty($request->input('destino')) || empty($request->input('frete')) ||
            empty($request->input('data')) || empty($request->input('mensagem'))){
                
                $retorno['status'] = 0;
                $retorno['msg'] = "Favor preencha todos os campos!";
        }else{
            $orcamento = new Orcamento;
            $orcamento->remetente = $request->input('rementente');
            $orcamento->contato = $request->input('contato');
            $orcamento->email = $request->input('email');
            $orcamento->telefone = $request->input('telefone');
            $orcamento->cidade = $request->input('cidadeOrigem');
            $orcamento->peso_real = $request->input('pesoReal');
            $orcamento->qtd_volumes = $request->input('qtdVolumes');
            $orcamento->tipo_mercadoria = $request->input('tipoMercadoria');
            $orcamento->cubagem = $request->input('cubagem');
            $orcamento->comprimento = $request->input('comprimento');
            $orcamento->altura = $request->input('altura');
            $orcamento->largura = $request->input('largura');
            $orcamento->valor_mercadoria = $request->input('valor');
            $orcamento->destinatario = $request->input('destinatario');
            $orcamento->destino = $request->input('destino');
            $orcamento->frete_id = $request->input('frete');
            $orcamento->data = $request->input('data');
            $orcamento->mensagem = $request->input('mensagem');
            $orcamento->save();

            Mail::to($request->input('email'))->send(new MailOrcamento($orcamento));

            $retorno['msg'] = "Orçamento Enviado!";
        }

        return json_encode($retorno);
    }
}
