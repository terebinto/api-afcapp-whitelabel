<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionarioRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario_respostas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('questionario_id')->unsigned();
            $table->foreign('questionario_id')->references('id')->on('questionarios')->onDelete('cascade');
            $table->string('pergunta',255)->nullable(); 
            $table->string('resposta',255)->nullable(); 
            $table->timestamp('data_resposta')->useCurrent();   
            $table->bigInteger('pontos')->nullable()->default(0);     
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
        Schema::dropIfExists('questionario_respostas');
    }
}
