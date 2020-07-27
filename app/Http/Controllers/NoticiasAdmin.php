<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiasAdmin extends Controller
{
    public function index($dados = null){
        $noticias = Noticia::all();
        return view('admin.noticias')->with('noticias', $noticias)->with('dados', $dados);
    }

    public function novaNoticia(){
        return view('admin.novaNoticia');
    }

    public function salvarNoticia(Request $request){
        $retorno = array();

        if(empty($request->input('titulo')) || empty($request->input('texto')) || empty($request->file('imagem'))){
            $retorno['msg'] = "Favor preencha todos os campos!";
            $retorno['class'] = "alert alert-danger";
            return view('admin.novaNoticia')->with('dados', $retorno);
        }else{
            $noticia = new Noticia;
            $noticia->titulo = $request->input('titulo');
            $noticia->texto = $request->input('texto');
            $noticia->imagem = $request->file('imagem')->store('noticias', 'public');
            $noticia->save();

            $retorno['class'] = "alert alert-primary";
            $retorno['msg'] = "Notícia publicada com sucesso!";
        }

        return $this->index($retorno);
    }

    public function destroy($id){
        $retorno = array();

        if(!empty($id)){
            $noticia = Noticia::find($id);
            $noticia->delete();
            $retorno['class'] = "alert alert-primary";
            $retorno['msg'] = "Notícia apagada com sucesso!";
        }else{
            $retorno['class'] = "alert alert-danger";
            $retorno['msg'] = "Falha ao apagar a notícia!";
        }

        return $this->index($retorno);
    }
}
