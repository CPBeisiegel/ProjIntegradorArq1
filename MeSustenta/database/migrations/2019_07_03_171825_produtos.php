<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('idProduto');
            $table->string("nome_produto");
            $table->string("tipo_produto");
            $table->string("descricao_prod");
            $table->decimal("preco_venda");
            $table->float("imagens");
            $table->string("codigo_do_produto");
            $table->string("codigo_categoria");
            $table->string("codugo_fornecedor");
            $table->decimal("unidade_em_estoque");
            $table->string("produto_status");
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
        Schema::dropIfExists('produtos');
    }
}
