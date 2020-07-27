<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::all();

        return view("noticias")->with('noticias', $noticias);
    }
}
