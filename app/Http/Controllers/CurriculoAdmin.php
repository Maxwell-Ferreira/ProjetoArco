<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Curriculo;

class CurriculoAdmin extends Controller
{

    public function index(){

        $curriculos = DB::select('select c.*, e.sigla, s.sexo, ec.estado_civil
                                from curriculos as c inner join estados as e
                                    on c.estado_id = e.id inner join sexos as s
                                        on c.sexo_id = s.id inner join estados_civis as ec
                                            on c.estado_civil_id = ec.id ');
        return view('admin.curriculos')->with('curriculos', $curriculos);
    }
}
