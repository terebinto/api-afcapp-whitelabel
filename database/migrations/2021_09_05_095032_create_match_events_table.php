<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_match_events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('e_id')->unsigned();
            $table->bigInteger('player_id')->unsigned();
            $table->bigInteger('match_id')->unsigned();
            $table->integer('ecount')->nullable()->default('0');
            $table->integer('minutes')->nullable()->default('0');
            $table->bigInteger('t_id')->unsigned();
            $table->timestamps();

            $table->foreign('match_id')
                ->references('id')
                ->on('nx510_bl_match')->onDelete('cascade');

            $table->foreign('t_id')
                ->references('id')
                ->on('nx510_bl_teams');

            $table->foreign('player_id')
                ->references('id')
                ->on('nx510_bl_players');

            $table->foreign('e_id')
                ->references('id')
                ->on('nx510_bl_events');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nx510_bl_match_events');
    }
}
