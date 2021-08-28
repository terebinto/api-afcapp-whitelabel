<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');        
            $table->string('situacao')->nullable();  
            $table->string('marca')->nullable();  
            $table->string('cor')->nullable();  
            $table->string('ano')->nullable();  
            $table->string('modelo')->nullable();  
            $table->string('anoModelo')->nullable();  
            $table->string('placa')->nullable();  
            $table->string('data')->nullable();  
            $table->string('uf')->nullable();  
            $table->string('municipio')->nullable();  
            $table->string('chassi')->nullable();  
            $table->string('dataAtualizacaoCaracteristicasVeiculo')->nullable(); 
            $table->string('dataAtualizacaoRouboFurto')->nullable(); 
            $table->string('dataAtualizacaoAlarme')->nullable(); 
            $table->enum('status', array('A','I'))->default('A'); 
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
        Schema::dropIfExists('veiculos');
    }
}
