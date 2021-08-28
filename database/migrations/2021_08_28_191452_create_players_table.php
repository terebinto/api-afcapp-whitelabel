<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(' nx510_bl_players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255)->nullable();
            $table->string('nick', 255)->nullable();
            $table->string('about', 255)->nullable();
            $table->string('position_id', 255)->nullable();
            $table->string('def_img', 255)->nullable();
            $table->string('team_id', 255)->nullable();
             
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
        Schema::dropIfExists('nx510_bl_players');
    }
}
