<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_tournament', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('descr',255);
            $table->string('logo',255)->nullable();
            $table->enum('published', array('S','N'))->default('N');
            $table->string('path',200)->nullable();
            $table->string('sigla',128)->nullable();         
            $table->integer('ordem')->nullable();
            $table->integer('id_cidade')->nullable();
            $table->integer('is_federado')->nullable();
            $table->integer('tipo')->nullable();;
            $table->integer('id_noticia')->nullable();;
            $table->integer('id_banner')->nullable();;
            $table->integer('parceiro')->nullable();            
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
        Schema::dropIfExists('nx510_bl_tournament');
    }
}
