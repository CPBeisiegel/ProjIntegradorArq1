<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UltimasBuscas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultimas__buscas', function (Blueprint $table) {
            $table->bigIncrements('idUltimasBuscas');
            $table->string("departamentos_ult", 45);
            $table->string("nome_ult", 45);
            $table->string("categoria_ult", 45);
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
        Schema::dropIfExists('ultimas__buscas');
    }
}
