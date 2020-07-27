<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailEsqueceuSenha;

class LoginController extends Controller
{
    public function login(Request $request){
        $user = Usuario::all();

        $admin = $user[0]->login;
        $senha = $user[0]->senha;

        if(empty($request->input('login')) || empty($request->input('senha'))){
            $msg['msg'] = "Favor, preencha os campos";
            $msg['class'] = "alert alert-danger";
            return view('/admin/login')->with('msg', $msg);
        }

        if($request->input('login') == $admin){
            if($request->input('senha') == $senha){
                session(['login' => 'login']);
                return redirect('/admin');
            }
        }

        $msg['msg'] = "Login e(ou) senha incorreto(s)";
        $msg['class'] = "alert alert-danger";

        return view('/admin/login')->with('msg', $msg);
    }

    public function esqueceuSenha(){
        $usuario = Usuario::find(1);
        Mail::to($usuario->email)->send(new MailEsqueceuSenha($usuario));
        $msg['msg'] = "Um email com a senha de adm foi enviado para o email ".$usuario->email." -
            Favor verificar caixa de entrada!";
        $msg['class'] = "alert alert-success";

        return view('/admin/login')->with('msg', $msg);
    }
}
