<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoberturaRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobertura_respostas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('solicitacao_id')->unsigned();
            $table->foreign('solicitacao_id')->references('id')->on('solicitacaos')->onDelete('cascade');
            $table->bigInteger('cobertura_id')->unsigned();
            $table->foreign('cobertura_id')->references('id')->on('coberturas')->onDelete('cascade');   
            $table->string('nome')->nullable(); 
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
        Schema::dropIfExists('cobertura_respostas');
    }
}
