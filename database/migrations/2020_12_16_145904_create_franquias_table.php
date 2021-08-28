<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFranquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franquia', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_seguro_id')->unsigned();
            $table->foreign('tipo_seguro_id')->references('id')->on('tipo_seguros')->onDelete('cascade');
            $table->string('nome')->nullable();             
            $table->enum('status', array('A','I'))->default('A');           
            $table->string('descricaoAdicional')->nullable();  
            $table->enum('tipo', array('B','T','C','R'))->default('B');  
            $table->timestamps();           
        });

        DB::table('franquia')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Franquia',
            'descricaoAdicional' => '',             
        ]);

        DB::table('franquia')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Franquia de Vidro Para Brisa e traseiro',
            'descricaoAdicional' => '',             
        ]);

        DB::table('franquia')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Franquia Vidro Lateral',
            'descricaoAdicional' => '',             
        ]);

        DB::table('franquia')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Franquia de Farol e Lanterna convencional',
            'descricaoAdicional' => '',             
        ]);

        DB::table('franquia')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Franquia de Farol de Xenônio(Item de série)',
            'descricaoAdicional' => '',             
        ]);

        DB::table('franquia')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Franquia de Retrovisor',
            'descricaoAdicional' => '',             
        ]);

        DB::table('franquia')->insert([
            'tipo_seguro_id' => '1',
            'nome' => 'Fator de Ajuste-tabela FIPE',
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
        Schema::dropIfExists('franquias');
    }
}
