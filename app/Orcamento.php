<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    function frete(){
        return $this->belongsTo('App\Frete');
    }
}
