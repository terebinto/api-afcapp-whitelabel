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
        Schema::create('nx510_bl_players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255)->nullable();
            $table->string('nick', 255)->nullable();
            $table->string('about', 255)->nullable();
            $table->bigInteger('position_id')->unsigned();
            $table->string('def_img', 255)->nullable();
            $table->bigInteger('team_id')->unsigned();
            $table->string('rg', 30)->nullable();
            $table->string('cpf', 30)->nullable();
            $table->string('matricula', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('altura', 10)->nullable();
            $table->enum('federado', array('N', 'S'))->default('N');
            $table->string('suspensoRodadas', 255)->nullable();
            $table->timestamp('dataNascimento')->nullable();

            $table->foreign('position_id')
                ->references('id')
                ->on('nx510_positions');

            $table->foreign('team_id')
                ->references('id')
                ->on('nx510_bl_teams')->onDelete('cascade');

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
