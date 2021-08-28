<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTipoSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_seguros', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();  
            $table->string('description')->nullable();  
            $table->timestamps();
        });

        DB::table('tipo_seguros')->insert([
            'name' => 'Seguro Auto',
            'description' => 'A gente quer que você curta seu carro. Mas se rolar qualquer problema, é só chamar o Seguro. ',             
        ]);

        DB::table('tipo_seguros')->insert([
            'name' => 'Seguro Residencial',
            'description' => 'O Seguro Residencial é pra você aproveitar ao máximo seu cantinho com a família e os amigos.',             
        ]);

        DB::table('tipo_seguros')->insert([
            'name' => 'Seguro Vida',
            'description' => 'Um Seguro de Vida pra ficar numa boa e garantir o futuro de quem é importante pra você.',             
        ]);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_seguros');
    }
}
