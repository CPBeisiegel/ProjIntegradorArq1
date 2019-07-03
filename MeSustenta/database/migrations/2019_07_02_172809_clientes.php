<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('idCliente');
            $table->string("prim_nome", 150);
            $table->string("ult_nome", 150);
            $table->string("endereco", 150);
            $table->string("cidade", 45);
            $table->decimal("cep", 5,3);
            $table->string("email", 45);
            $table->string("login", 45);
            $table->string("senha", 45);
            $table->integer("cliente_status", 45);// Diferente da Tabela que é varchar
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
        Schema::dropIfExists('clientes');
    }
}
