<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('remetente');
            $table->string('contato');
            $table->string('email');
            $table->string('telefone');
            $table->string('cidade');
            $table->string('peso_real');
            $table->string('qtd_volumes');
            $table->string('tipo_mercadoria');
            $table->string('cubagem');
            $table->string('comprimento');
            $table->string('altura');
            $table->string('largura');
            $table->string('valor_mercadoria');
            $table->string('destinatario');
            $table->string('destino');
            $table->integer('frete_id')->unsigned();
            $table->date('data');
            $table->string('mensagem');
            $table->timestamps();
            $table->foreign('frete_id')->references('id')->on('fretes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
}
