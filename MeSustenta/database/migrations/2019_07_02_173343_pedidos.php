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
            $table->string('CodigoCliente',45);
            $table->string('DataDoPedido',45);
            $table->string('DataDeEntrega',45);
            $table->string('DataDeEnvio',45);
            $table->string('Frete',45);
            $table->string('NomeDestinatario',45);
            $table->string('EnderecoDestinatario',45);
            $table->string('CidadeDestino',45);
            $table->decimal('CepDestino',45);
            $table->integer('Pedidos_itens',45);
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
