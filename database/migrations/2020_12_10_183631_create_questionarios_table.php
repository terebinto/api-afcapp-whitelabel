<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateQuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_seguro_id')->unsigned();
            $table->foreign('tipo_seguro_id')->references('id')->on('tipo_seguros')->onDelete('cascade');
            $table->string('pergunta')->nullable();  
            $table->string('help')->nullable();  
            $table->enum('status', array('A','I'))->default('A');
            $table->enum('tipo', array('B','T','C','R'))->default('T');     
            $table->timestamps();
        });

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Qual a placa ou chassi do seu carro?',
            'help' => 'Vamos começar: conta um pouco sobre o seu carro ;)', 
            'tipo'  => 'T',            
        ]);

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Qual é o tipo de uso do carro?',
            'help' => 'De que maneira o veiculo é utilizado diariamente', 
            'tipo'  => 'C',             
        ]);

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Seu carro é blindado?',
            'help' => '',  
            'tipo'  => 'B',             
        ]);

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Qual o CEP onde o carro dorme?',
            'help' => '', 
            'tipo'  => 'T',             
        ]);

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Qual o CPF do condutor principal?',
            'help' => ' Agora vamos falar sobre quem vai dirigir o carro.',  
            'tipo'  => 'T',            
        ]);

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Você tem ou teve seguro no último ano?',
            'help' => ' Agora vamos falar sobre quem vai dirigir o carro.',  
            'tipo'  => 'B',              
        ]);

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Existem outros condutores entre 18 e 25 anos dirigindo este veículo?',
            'help' => ' Agora vamos falar sobre quem vai dirigir o carro.',  
            'tipo'  => 'B',              
        ]);

        DB::table('questionarios')->insert([
            'tipo_seguro_id' => '1',
            'pergunta' => 'Podemos acessar as informações das redes sociais?',
            'help' => 'Habilitando essa opção, você pode ganhar um bonus ou desconto no valor final.', 
            'tipo'  => 'B',             
        ]);
        



           
       


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionarios');
    }
}
