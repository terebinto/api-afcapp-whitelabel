<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateTipoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();  
            $table->timestamps();
        });

        DB::table('tipo_usuarios')->insert([
            'name' => 'admin',            
        ]);

        DB::table('tipo_usuarios')->insert([
            'name' => 'Corretor de Seguros',            
        ]);

        DB::table('tipo_usuarios')->insert([
            'name' => 'Pessoa Fisica (Segurado)',            
        ]);

        DB::table('tipo_usuarios')->insert([
            'name' => 'Pessoa Jurídica(Segurado)',            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_usuarios');
    }
}
