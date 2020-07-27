<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Orcamento;

class OrcamentoAdmin extends Controller
{

    public function __construct()
    {
        $this->middleware(\App\Http\Middleware\AdminArea::class);
    }

    public function index(){
        $orcamentos = DB::select('select o.*, f.tipo_frete 
            from fretes as f inner join orcamentos as o
            on o.frete_id = f.id');
        return view('admin.index')->with('orcamentos',$orcamentos);
    }
}
