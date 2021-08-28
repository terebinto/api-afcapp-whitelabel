<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremioPropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premio_propostas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas')->onDelete('cascade');
            $table->bigInteger('premio_id')->unsigned();
            $table->foreign('premio_id')->references('id')->on('premios')->onDelete('cascade')->nullable();            
            $table->decimal('valorEngargo')->default('0');   
            $table->decimal('valorCusto')->default('0'); 
            $table->decimal('valorIof')->default('0'); 
            $table->decimal('valor')->default('0');  
            $table->decimal('valorTotal')->default('0');    
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
        Schema::dropIfExists('premio_propostas');
    }
}
