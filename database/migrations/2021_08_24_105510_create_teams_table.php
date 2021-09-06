<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_teams', function (Blueprint $table) {
            $table->id();
            $table->string('t_name', 255);
            $table->string('t_descr', 255)->nullable();
            $table->string('t_about', 255)->nullable();
            $table->string('t_yteam', 255)->nullable();
            $table->string('def_img', 255)->nullable();
            $table->string('t_emblem', 255)->nullable();
            $table->string('t_city', 255)->nullable();
            $table->integer('t_id_cidade')->nullable();
            $table->string('t_coach', 255)->nullable();
            $table->string('t_secondary_color', 255)->nullable();
            $table->string('t_main_color', 255)->nullable();
            $table->string('t_initials', 255)->nullable();
            $table->string('t_email', 255)->nullable();
            $table->string('t_representative', 255)->nullable();
            $table->string('t_assistant_1', 255)->nullable();
            $table->string('t_assistant_2', 255)->nullable();
            $table->string('t_assistant_3', 255)->nullable();
            $table->string('t_director', 255)->nullable();
            $table->string('t_foundation', 255)->nullable();         
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
        Schema::dropIfExists('teams');
    }
}
