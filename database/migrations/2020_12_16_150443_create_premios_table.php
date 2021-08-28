<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePremiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_seguro_id')->unsigned();
            $table->foreign('tipo_seguro_id')->references('id')->on('tipo_seguros')->onDelete('cascade');
            $table->string('nome')->nullable();                       
            $table->string('descricaoAdicional')->nullable(); 
            $table->enum('tipo', array('B','T','C','R'))->default('B');   
            $table->timestamps();
        });

        
        DB::table('premios')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Prêmio Líquido',
            'descricaoAdicional' => '',             
        ]);


    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premios');
    }
}
