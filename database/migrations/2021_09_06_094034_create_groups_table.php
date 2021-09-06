<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_bl_groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_name', 255)->nullable();
            $table->bigInteger('s_id')->unsigned();
            $table->bigInteger('ordering')->nullable()->default('0');
            $table->timestamps();

            $table->foreign('s_id')
                ->references('id')
                ->on('nx510_bl_seasons')->onDelete('cascade');
                
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
