<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('cidade');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->integer('sexo_id')->unsigned();
            $table->foreign('sexo_id')->references('id')->on('sexos');
            $table->integer('estado_civil_id')->unsigned();
            $table->foreign('estado_civil_id')->references('id')->on('estados_civis');
            $table->string('nascimento');
            $table->string('vaga');
            $table->string('curriculo');
            $table->string('observacoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculos');
    }
}
