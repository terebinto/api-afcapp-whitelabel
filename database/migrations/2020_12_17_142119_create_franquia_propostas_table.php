<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFranquiaPropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franquia_propostas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas')->onDelete('cascade');
            $table->bigInteger('franquia_id')->unsigned();
            $table->foreign('franquia_id')->references('id')->on('franquia')->onDelete('cascade');
            $table->string('nome')->nullable();  
            $table->decimal('valor')->nullable()->default(0);                  
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
        Schema::dropIfExists('franquia_propostas');
    }
}
