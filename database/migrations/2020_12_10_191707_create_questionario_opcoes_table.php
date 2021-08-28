<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateQuestionarioOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario_opcoes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('questionario_id')->unsigned();
            $table->foreign('questionario_id')->references('id')->on('questionarios')->onDelete('cascade');
            $table->string('opcao')->nullable();  
            $table->bigInteger('pontos')->nullable()->default(0);           
            $table->timestamps();
        });

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '2',
            'opcao' => 'Particular', 
            'pontos' => 1,                        
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '2',
            'opcao' => 'Particular, Uso Comercial e Motorista de Aplicativo', 
            'pontos' => 2,                           
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '2',
            'opcao' => 'Representante Comercial/Vendas',  
            'pontos' => 3,                         
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '2',
            'opcao' => 'Taxi',  
            'pontos' => 4,                       
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '2',
            'opcao' => 'Transporte de Carga',  
            'pontos' => 5,                       
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '2',
            'opcao' => 'Transporte de passageiros', 
            'pontos' => 6,                        
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '3',
            'opcao' => 'Sim',   
            'pontos' => 1,                      
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '3',
            'opcao' => 'Não',   
            'pontos' => 3,                      
        ]);

        
        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '7',
            'opcao' => 'Sim', 
            'pontos' => 7,                        
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '7',
            'opcao' => 'Não',  
            'pontos' => 2,                      
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '6',
            'opcao' => 'Sim', 
            'pontos' => 3,                        
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '6',
            'opcao' => 'Não',  
            'pontos' => 1,                      
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '8',
            'opcao' => 'Sim',   
            'pontos' => 3,                      
        ]);

        DB::table('questionario_opcoes')->insert([
            'questionario_id' => '8',
            'opcao' => 'Não',   
            'pontos' => 6,                      
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionario_opcoes');
    }
}
