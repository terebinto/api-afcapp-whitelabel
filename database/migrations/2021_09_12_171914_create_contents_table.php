<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nx510_content', function (Blueprint $table) {
            $table->id();
            $table->string('alias', 255);
            $table->string('title', 255);
            $table->mediumText('introtext');
            $table->mediumText('fulltext');
            $table->enum('state', array('A','I','P'))->default('P');
            $table->bigInteger('cat_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('created', 255);
            $table->timestamp('publish_up')->nullable(); ;
            $table->timestamp('publish_down')->nullable(); ;
            $table->string('image', 255);
            $table->timestamps();

            $table->foreign('cat_id')
            ->references('id')
            ->on('nx510_categories');

            $table->foreign('user_id')
            ->references('id')
            ->on('users');            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
