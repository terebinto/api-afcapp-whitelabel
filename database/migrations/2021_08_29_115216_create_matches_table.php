<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_match', function (Blueprint $table) {
            $table->id();
            $table->string('match_descr', 255)->nullable();
            $table->bigInteger('m_id')->unsigned();
            $table->bigInteger('team1_id')->unsigned();
            $table->bigInteger('team2_id')->unsigned();
            $table->integer('score1')->nullable();
            $table->integer('score2')->nullable();
            $table->enum('published', array('0', '1'))->default('0');
            $table->enum('is_extra', array('0', '1'))->default('0');
            $table->enum('m_played', array('0', '1'))->default('0');
            $table->timestamp('m_date')->nullable();
            $table->string('m_time', 255)->nullable();
            $table->timestamps();

            $table->foreign('m_id')
                ->references('id')
                ->on('nx510_bl_matchday');

            $table->foreign('team1_id')
                ->references('id')
                ->on('nx510_bl_teams');

            $table->foreign('team2_id')
                ->references('id')
                ->on('nx510_bl_teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nx510_bl_match');
    }
}
