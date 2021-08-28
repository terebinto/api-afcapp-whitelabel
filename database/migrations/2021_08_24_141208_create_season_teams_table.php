<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_season_teams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('season_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('bonus_point')->nullable();
            $table->timestamps();

            $table->foreign('season_id')
                ->references('id')
                ->on('nx510_bl_seasons')
                ->onDelete('cascade');

            $table->foreign('team_id')
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
        Schema::dropIfExists('season_teams');
    }
}
