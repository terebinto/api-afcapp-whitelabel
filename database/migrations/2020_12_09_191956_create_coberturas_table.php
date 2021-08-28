<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCoberturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coberturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_seguro_id')->unsigned();
            $table->foreign('tipo_seguro_id')->references('id')->on('tipo_seguros')->onDelete('cascade');
            $table->string('name')->nullable();  
            $table->string('description')->nullable();  
            $table->enum('status', array('A','I','P'))->default('A');
            $table->enum('tipo', array('B','T','C','R'))->default('B'); 
            $table->timestamps();
        });

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Acidente de passageiros',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Alagamento e eventos da natureza',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Incêndio',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Danos corporais a terceiros',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Danos materiais a terceiros',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Roubo e Furto',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Colisão (vale para perda total)',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Colisão (vale para qualquer batida)',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '1',
            'name' => 'Acidentes de passageiros com despesas médicas e hospitalares',
            'description' => '',             
        ]);



        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Vendaval, furacão, ciclone, tornado, granizo e fumaça',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Impacto de veículos e queda de aeronave',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Danos elétricos',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Furto, extorsão e roubo de bens',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Perda ou pagamento de aluguel',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Quebra de vidros, espelhos, mármore e granitos',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Danos a Terceiros',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '2',
            'name' => 'Tumulto, greve e lock-out',
            'description' => '',             
        ]);


        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '3',
            'name' => 'Indenização por diagnóstico de câncer',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '3',
            'name' => 'Indenização em dobro por morte acidental',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '3',
            'name' => 'Indenização por morte de filho',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '3',
            'name' => 'Morte natural e acidental',
            'description' => '',             
        ]);

        DB::table('coberturas')->insert([
            'tipo_seguro_id' => '3',
            'name' => 'Indenização por morte do cônjuge',
            'description' => '',             
        ]);   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coberturas');
    }
}
