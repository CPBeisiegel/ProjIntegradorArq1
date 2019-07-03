<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListadeDesejos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listade_desejos', function (Blueprint $table) {
            $table->bigIncrements('idListasdeDesejo');
            $table->string("departamentos_ult", 45);
            $table->string("usuario", 45);
            $table->string("tipo_de_prod", 45);
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
        Schema::dropIfExists('listade_desejos');
    }
}
