<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->bigIncrements('idFornecedores');
            $table->string("Nome_da_empresa", 45);
            $table->string("tipo_produto", 45);
            $table->decimal("preco_custo", 45);
            $table->string("Endereco", 45);
            $table->decimal("Cep", 45);
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
        Schema::dropIfExists('fornecedores');
    }
}
