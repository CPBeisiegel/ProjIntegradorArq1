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
            $table->string("nome_produto", 45);
            $table->string("tipo_produto", 45);
            $table->string("descricao_prod",45);
            $table->decimal("preco_venda",45);
            $table->float("imagens");
            $table->string("codigo_do_produto",45);
            $table->string("codigo_categoria",45);
            $table->string("codugo_fornecedor",45);
            $table->decimal("unidade_em_estoque",45);
            $table->string("produto_status",45);
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
