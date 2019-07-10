<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('idPedidos');
            $table->string('codigoCliente');
            $table->string('dataDoPedido');
            $table->string('dataDeEntrega');
            $table->string('dataDeEnvio');
            $table->string('frete');
            $table->string('nomeDestinatario');
            $table->string('enderecoDestinatario');
            $table->string('cidadeDestino');
            $table->decimal('cepDestino');
            $table->bigInteger('pedidos_itens');
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
        Schema::dropIfExists('pedidos');
    }
}
