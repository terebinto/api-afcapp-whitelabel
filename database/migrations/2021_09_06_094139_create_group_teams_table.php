<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_grteams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('g_id')->unsigned();
            $table->bigInteger('t_id')->unsigned();
            $table->timestamps();

            $table->foreign('g_id')
                ->references('id')
                ->on('nx510_bl_groups')->onDelete('cascade');

            $table->foreign('t_id')
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
        Schema::dropIfExists('group_teams');
    }
}
