<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficioPropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficio_propostas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas')->onDelete('cascade');
            $table->bigInteger('beneficio_id')->unsigned();
            $table->foreign('beneficio_id')->references('id')->on('beneficios')->onDelete('cascade');                  
            $table->decimal('valor')->nullable();  
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
        Schema::dropIfExists('beneficio_propostas');
    }
}
