<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_type')->unsigned();
            $table->foreign('user_type')->references('id')->on('tipo_usuarios')->onDelete('cascade')->default(3);
            $table->string('name')->nullable();  
            $table->string('lastname')->nullable();  
            $table->string('endereco')->nullable();
            $table->string('numero',10)->nullable(); 
            $table->string('estado',2)->nullable();    
            $table->string('cidade')->nullable(); 
            $table->string('complemento')->nullable(); 
            $table->string('cpfCnpj',20)->nullable()->unique();  
            $table->string('telefone',20)->nullable();
            $table->string('celular',20)->nullable(); 
            $table->string('cep',20)->nullable(); 
            $table->string('nomeFantasia')->nullable(); 
            $table->string('nomeEmpresa')->nullable();                     
            $table->string('username')->nullable();
            $table->string('password')->nullable(); 
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('token')->nullable();
            $table->string('passwordType')->nullable(); 
            $table->enum('tipoPessoa', array('A','I','P'))->default('A');
            $table->enum('aceiteTermos', array('S','N'))->default('N');          
            $table->rememberToken();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
