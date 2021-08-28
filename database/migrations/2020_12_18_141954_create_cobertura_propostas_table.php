<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoberturaPropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobertura_propostas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas')->onDelete('cascade');
            $table->bigInteger('cobertura_id')->unsigned();
            $table->foreign('cobertura_id')->references('id')->on('coberturas')->onDelete('cascade');
            $table->decimal('valor')->nullable()->default(0); 
            $table->string('nome')->nullable();  
            $table->string('descricaoAdicional')->nullable();             
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
        Schema::dropIfExists('cobertura_propostas');
    }
}
