<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class MudarSenha extends Controller
{

    public function index()
    {
        return view('admin.mudarSenha');
    }

    public function update(Request $request)
    {
        if(empty($request->input('senha'))){
            $msg['msg'] = "Favor, informe a nova senha!";
            $msg['class'] = "alert alert-danger";
            return view('admin.mudarSenha')->with('msg', $msg);
        }

        $usuario = Usuario::find(1);
        $usuario->senha = $request->input('senha');
        $usuario->save();
        $msg['msg'] = "Senha alterada com sucesso!";
        $msg['class'] = "alert alert-success";
        return view('admin.mudarSenha')->with('msg', $msg);
    }

}
