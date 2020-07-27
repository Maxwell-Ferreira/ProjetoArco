<?php

namespace App\Http\Controllers;
use App\Contato;

use Illuminate\Http\Request;

class MensagemAdmin extends Controller
{

    public function __construct()
    {
        $this->middleware(\App\Http\Middleware\AdminArea::class);
    }


    public function index(){
        $mensagens = Contato::all();

        return view('admin.mensagens')->with('mensagens', $mensagens);
    }
}
