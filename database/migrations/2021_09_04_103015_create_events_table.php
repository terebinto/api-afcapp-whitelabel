<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_events', function (Blueprint $table) {
            $table->id();
            $table->string('e_name', 255)->nullable();
            $table->string('e_img', 255)->nullable();
            $table->string('e_descr', 255)->nullable();
            $table->enum('player_event', array('0', '1'))->default('1')->nullable();
            $table->bigInteger('id_sport')->unsigned();
            $table->integer('exibir_app')->nullable()->default('0');
            $table->string('titulo_app', 50)->nullable();
            $table->string('descricao_unica', 50)->nullable();
            $table->timestamps();

            $table->foreign('id_sport')
                ->references('id')
                ->on('nx510_sports')->onDelete('cascade');
        });


       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
