<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateBeneficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_seguro_id')->unsigned();
            $table->foreign('tipo_seguro_id')->references('id')->on('tipo_seguros')->onDelete('cascade');
            $table->string('nome')->nullable();                   
            $table->string('descricaoAdicional')->nullable(); 
            $table->enum('tipo', array('B','T','C','R'))->default('B'); 
            $table->timestamps();
        });


        DB::table('beneficios')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Assistência 24hs com Guincho limitado a 200 km',
            'descricaoAdicional' => '',             
        ]);

        DB::table('beneficios')->insert([
            'tipo_seguro_id' => '1',
            'nome' => '2o. Guincho 100 km no mesmo evento,',
            'descricaoAdicional' => '',             
        ]);

        DB::table('beneficios')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Táxi sem Franquia',
            'descricaoAdicional' => '',             
        ]);

        DB::table('beneficios')->insert([
            'tipo_seguro_id' => '1',
            'nome' => '7 dias de arro Reserva quando Terceiro',
            'descricaoAdicional' => '',             
        ]);

        DB::table('beneficios')->insert([
            'tipo_seguro_id' => '1',
            'nome' => '15 dias de Carro Reserva',
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
        Schema::dropIfExists('beneficios');
    }
}
