<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_id_corretor')->unsigned();
            $table->foreign('user_id_corretor')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('solicitacao_id')->unsigned();
            $table->foreign('solicitacao_id')->references('id')->on('solicitacaos')->onDelete('cascade');
            $table->timestamp('data_inicio_vigencia')->nullable();  
            $table->timestamp('data_fim_vigencia')->nullable();
            $table->timestamp('validade_proposta')->nullable();
            $table->bigInteger('scoreFinal')->nullable();
            $table->decimal('valor')->nullable()->default(0);
            $table->enum('status', array('A','E','F'))->default('E');           
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
        Schema::dropIfExists('propostas');
    }
}
