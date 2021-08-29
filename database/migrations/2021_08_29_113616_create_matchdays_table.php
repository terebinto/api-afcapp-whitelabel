<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_matchday', function (Blueprint $table) {
            $table->id();
            $table->string('m_name', 255);
            $table->string('m_descr', 255)->nullable();
            $table->bigInteger('s_id')->unsigned();
            $table->enum('is_playoff', array('0', '1'))->default('0');
            $table->timestamps();

            $table->foreign('s_id')
                ->references('id')
                ->on('nx510_bl_seasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nx510_bl_matchday');
    }
}
