<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_seasons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('t_id')->unsigned();
            $table->string('s_name', 255);
            $table->longText('s_descr', 255);
            $table->enum('published', array('S', 'N'))->default('N');
            $table->string('s_rounds', 3)->nullable();
            $table->string('s_win_point', 3)->nullable();
            $table->string('s_lost_point', 3)->nullable();
            $table->string('s_enbl_extra', 3)->nullable();
            $table->string('s_extra_win', 3)->nullable();
            $table->string('s_extra_lost', 3)->nullable();
            $table->string('s_draw_point', 3)->nullable();
            $table->string('s_groups', 3)->nullable();
            $table->string('s_draw_away', 3)->nullable();
            $table->string('s_lost_away', 3)->nullable();
            $table->string('s_win_away', 3)->nullable();            
            $table->string('s_segunda_fase_grupo', 3)->nullable();
            $table->string('s_segunda_fase_total_classificados', 3)->nullable();
            $table->string('s_segunda_fase_data', 15)->nullable();
            $table->timestamps();

            $table->foreign('t_id')
                ->references('id')
                ->on('nx510_bl_tournament')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
}
