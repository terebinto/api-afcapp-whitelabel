<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_positions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sports_id')->unsigned();
            $table->string('name')->nullable();  
            $table->string('description')->nullable(); 
            $table->timestamps();

            $table->foreign('sports_id')
            ->references('id')
            ->on('nx510_sports')
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
        Schema::dropIfExists('positions');
    }
}
