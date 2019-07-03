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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("login", 45);
            $table->string('password');
            $table->string("endereco", 150);
            $table->string("cidade", 45);
            $table->decimal("cep", 5,3);
            $table->integer("cliente_status", 45);
            $table->integer('Fk_idListade_desejos',45);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('Fk_idListade_desejos')->references('idListade_desejos')->on('listade_desejos');
         
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
