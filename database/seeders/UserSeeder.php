<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'user_type' =>'1',
        ]);

        
        DB::table('users')->insert([
            'name' =>'alexandre',
            'lastname' => 'terebinto',
            'email' => 'alexandre.silva@deal.com.br',
            'endereco' => 'Rua Tamoios',
            'numero' => '380',
            'estado' => 'PR',
            'cidade' => 'Curitiba',
            'cpfCnpj' => '00599571900',
            'celular' => '41 99902 0605',
            'cep' => '80320290',
            'password' => bcrypt('123456'),
            'user_type' =>'3',
        ]);

        DB::table('users')->insert([
            'name' =>'Porto Seguro',
            'lastname' => 'Automóveis',
            'email' => 'seguro@deal.com.br',
            'endereco' => 'Rua Tamoios',
            'numero' => '380',
            'estado' => 'PR',
            'cidade' => 'Curitiba',
            'cpfCnpj' => '00000000000000101',
            'celular' => '41 99902 0605',
            'cep' => '80320290',
            'password' => bcrypt('123456'),
            'user_type' =>'2',
        ]);
        
        
  
        DB::table('users')->insert([
            'name' => 'alexandre',
            'email' => 'ale@example.com',
            'aceiteTermos' => 'S',
            'tipoPessoa' => 'A',
            'user_type' =>'1',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'vinicius',
            'email' => 'vinicius@curitibano.com',
            'aceiteTermos' => 'S',
            'tipoPessoa' => 'A',
            'user_type' =>'1',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'andre',
            'email' => 'andre@example.com',
            'aceiteTermos' => 'S',
            'tipoPessoa' => 'A',
            'user_type' =>'1',
            'password' => bcrypt('123456'),
        ]);
    }
}
