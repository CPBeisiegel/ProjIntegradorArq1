<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('idCompra');
            $table->timestamp("data_compra", 45);
            $table->timestamp("data_entrega", 45);
            $table->dateTime("frete", 45);
            $table->integer("Fk_idCliente");
            $table->integer("Fk_idPagamento");
            $table->timestamps();

            $table->foreign('Fk_idCliente')->references('idCliente')->on('clientes');
            $table->foreign('Fk_idPagamento')->references('idPagamento')->on('pagamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
