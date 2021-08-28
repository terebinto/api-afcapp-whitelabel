<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuarios')->insert([
            'name' => 'admin',            
        ]);

        DB::table('tipo_usuarios')->insert([
            'name' => 'segurador',            
        ]);

        DB::table('tipo_usuarios')->insert([
            'name' => 'segurado',            
        ]);

        DB::table('tipo_usuarios')->insert([
            'name' => 'corretor',            
        ]);
    }
}
